# Schema sources and migration

`api-docs.json` is the downloaded [official LeadsPedia OpenAPI document](https://developer.leadspedia.com/openapi.json).
`openapi.json` is the deterministic output of `php scripts/convertor.php`, used by
OpenAPI Generator. `build.sh` downloads, normalizes, and regenerates the SDK.

The official source is OpenAPI 3.1 and covers Core, Affiliate, and Advertiser APIs.
This SDK deliberately includes only `/core/v2/` operations. The converter uses
`/core/v2` as the base path and removes that prefix from each operation path, so
requests contain the prefix exactly once. Tags and operation IDs are derived from
these relative paths to retain existing PHP class and method names for shared
endpoints. Swagger 2.0 is the generator input format, not the upstream format.

The official document currently gives every operation only a default response
without a body schema. The converter retains that response and supplements it
with the SDK's existing generic 200 response envelopes: `InlineResponse200` for
writes (`success`, `message`), and `InlineResponse2001` for reads (also `response`,
`data`). These envelopes are SDK assumptions, not schemas supplied by LeadsPedia.
Documented JSON response schemas take precedence over the fallback.

The old API docs.io input format is still supported for archived documents and
legacy converter tests. New builds exclusively download the official source.

## Breaking contract differences

The initial official snapshot, inspected on 2026-11-03, contains 270 Core
operations, compared with 272 in the previous S3 source. There are 229 shared
paths, 41 added paths, and 43 paths no longer documented. Absence from the new
source does not prove that an endpoint has stopped working; this SDK now generates
only the officially documented Core endpoints.

Authentication changes from query-string `api_key` / `api_secret` to the official
[HTTP Basic scheme](https://developer.leadspedia.com/core-api/authentication),
using the API key as username and API secret as password. Configure the generated
client with:

```php
$config = (new \Leadspedia\Configuration())
    ->setUsername($apiKey)
    ->setPassword($apiSecret);
```

Across shared paths, the initial migration changed parameter names, types, order,
or required flags in 95 operations. The compatibility overlay described below
now reduces those differences. Removed/renamed fields, changed required flags,
defaults, enums, and other type changes still follow the official source. Check
the generated API documentation before upgrading.

## Compatibility overlay

`compatibility.json` records parameter order from SDK commit
`888154e` (before the official source migration), plus 33 explicit monetary type
overrides. It is committed input to the converter, so regeneration preserves
these choices without retrieving the old documentation or editing generated PHP.

- Existing parameters retain their previous relative order for 228 shared
  path/method pairs. New parameters follow existing ones within the required and
  optional groups; the generator always puts required parameters first.
- Known monetary fields previously typed as `number` remain decimal-capable even
  when the official source calls them `integer`. IDs, phone numbers, distances,
  and other integer fields are unaffected. An unexpected nonnumeric upstream
  type fails conversion so the override can be reviewed.
- `x-matching-pattern: YYYY-MM-DD` becomes `format: date`, unless upstream already
  specifies a format. Generated date parameters accept `DateTimeInterface`
  (including `Safe\DateTime` subclasses and immutable dates) or date strings.
  Date objects serialize as `Y-m-d` in their own timezone without being mutated.

This does not restore removed endpoints or parameters. Removed parameter slots,
new required parameters, and changed required flags can still break positional
calls. `/dnc/check.do` also changed from POST to GET upstream, so it does not use
the old method's parameter-order entry. HTTP Basic authentication remains the
official authentication mechanism.

## Added Core paths in this snapshot

- `/advertisers/generateInvoices.do`
- `/advertisers/getCreditHistory.do`
- `/callRoutingContracts/addToOffer.do`
- `/callRoutingContracts/getCreditHistory.do`
- `/callRoutingContracts/getOffers.do`
- `/callRoutingContracts/getPostbackSettings.do`
- `/callRoutingContracts/getZipCodeTargeting.do`
- `/callRoutingContracts/removeContractFromOffer.do`
- `/callRoutingContracts/updateDistributionTimeout.do`
- `/callRoutingContracts/updatePostbackSettings.do`
- `/callRoutingContracts/updateZipCodeTargeting.do`
- `/callRoutingRules/create.do`
- `/callRoutingRules/delete.do`
- `/callRoutingRules/getAll.do`
- `/campaigns/createFieldsPayout.do`
- `/campaigns/deleteFieldsPayout.do`
- `/campaigns/getFieldsPayouts.do`
- `/campaigns/updateCallPostbackURL.do`
- `/campaigns/updateFieldsPayout.do`
- `/campaigns/updatePostbackURL.do`
- `/deliveryMethods/getAll.do`
- `/dnc/deleteByEmail.do`
- `/dnc/deleteByPhone.do`
- `/inboundCalls/getCallIntegrationsLog.do`
- `/inboundCalls/getOneStepPingTreeLog.do`
- `/inboundCalls/getRecordingURL.do`
- `/leadDistributionContracts/createAffiliateCap.do`
- `/leadDistributionContracts/deleteAffiliateCap.do`
- `/leadDistributionContracts/getAffiliateCaps.do`
- `/leadDistributionContracts/getCreditHistory.do`
- `/leadDistributionContracts/getOffers.do`
- `/leadDistributionContracts/removeContractFromOffer.do`
- `/leadRoutingRules/create.do`
- `/leadRoutingRules/delete.do`
- `/leadRoutingRules/getAll.do`
- `/leads/deleteData.do`
- `/leads/getPostback.do`
- `/leads/unscrubLead.do`
- `/offers/getCallRoutingContracts.do`
- `/offers/getLeadContracts.do`
- `/verticals/changeStatus.do`

## Core paths no longer documented in this snapshot

- `/advertisersContacts/changePassword.do`
- `/advertisersContacts/changeStatus.do`
- `/advertisersContacts/create.do`
- `/advertisersContacts/delete.do`
- `/advertisersContacts/getAll.do`
- `/advertisersContacts/getInfo.do`
- `/advertisersContacts/update.do`
- `/advertisersContacts/verifyCredentials.do`
- `/affiliatesContacts/changePassword.do`
- `/affiliatesContacts/changeStatus.do`
- `/affiliatesContacts/create.do`
- `/affiliatesContacts/delete.do`
- `/affiliatesContacts/getAll.do`
- `/affiliatesContacts/getInfo.do`
- `/affiliatesContacts/update.do`
- `/affiliatesContacts/verifyCredentials.do`
- `/callRoutingContracts/removeWhisperMessage.do`
- `/callRoutingContracts/setAudioWhisperMessage.do`
- `/callRoutingContracts/setTextToSpeechWhisperMessage.do`
- `/campaigns/changeGoalsStaticThrottle.do`
- `/campaigns/changeOfferStaticThrottle.do`
- `/campaigns/getGoalsStaticThrottle.do`
- `/campaigns/getOfferStaticThrottle.do`
- `/campaigns/getPostKeys.do`
- `/campaigns/removeExpirationDate.do`
- `/campaigns/setExpirationDate.do`
- `/campaigns/updateClicksRevenue.do`
- `/changeStatus.do`
- `/clicksReports/getClicksBySubAffiliatesReport.do`
- `/goalsReports/getGoalsByCampaignsReport.do`
- `/goalsReports/getGoalsBySourceReport.do`
- `/goalsReports/getGoalsBySubAffiliatesReport.do`
- `/impressions/getAll.php`
- `/leadDistributionContracts/deleteDeliveryMethod.do`
- `/leadDistributionContracts/enableMultipleDeliveryMethods.do`
- `/leadsReports/getContractsLeadsFieldsCapReport.do`
- `/offers/changeAutoApproval.do`
- `/offers/changeFeatureListing.do`
- `/pixels/getAll.do`
- `/users/getAll.do`
- `/validation/email.do`
- `/validation/phone.do`
- `/validation/validateZipCode.do`

## Shared paths that differed in the initial official snapshot

- `/advertisers/adjustCredit.do`
- `/advertisers/getAll.do`
- `/advertisers/updateAutoRechargeSettings.do`
- `/advertisers/updateInfo.do`
- `/advertisers/updatePortalSettings.do`
- `/advertisersCreditCards/update.do`
- `/advertisersCreditCards/updatePaymentProfileID.do`
- `/affiliates/getAll.do`
- `/affiliates/updateBilling.do`
- `/affiliates/updateInfo.do`
- `/callRoutingContracts/adjustCredit.do`
- `/callRoutingContracts/create.do`
- `/callRoutingContracts/getAll.do`
- `/callRoutingContracts/updateAutoRechargeSettings.do`
- `/callRoutingContracts/updatePortalSettings.do`
- `/callRoutingContracts/updateRevenueModel.do`
- `/callTrackingReports/getCallRoutingReport.do`
- `/callTrackingReports/getCallsByAdvertisersDailyReport.do`
- `/callTrackingReports/getCallsByAdvertisersReport.do`
- `/callTrackingReports/getCallsByAffiliatesDailyReport.do`
- `/callTrackingReports/getCallsByAffiliatesReport.do`
- `/callTrackingReports/getCallsByCampaignsReport.do`
- `/callTrackingReports/getCallsByContractsReport.do`
- `/callTrackingReports/getCallsByOffersReport.do`
- `/callTrackingReports/getCallsBySubAffiliatesReport.do`
- `/callTrackingReports/getCallsByVerticalsReport.do`
- `/campaigns/addFilter.do`
- `/campaigns/getAll.do`
- `/campaigns/updateBasicInfo.do`
- `/clicksReports/getClicksByCampaignsReport.do`
- `/contractFieldRevenueRules/create.do`
- `/contractFieldRevenueRules/update.do`
- `/conversions/getAll.do`
- `/conversionsReports/getConversionsByAdvertisersReport.do`
- `/conversionsReports/getConversionsByAffiliatesReport.do`
- `/conversionsReports/getConversionsByCampaignsReport.do`
- `/conversionsReports/getConversionsByOffersReport.do`
- `/conversionsReports/getConversionsBySourceReport.do`
- `/conversionsReports/getConversionsBySubAffiliatesReport.do`
- `/conversionsReports/getConversionsByVerticalsReport.do`
- `/conversionsReports/getConversionsDailyReport.do`
- `/inboundCalls/getAll.do`
- `/inboundCalls/getInProgress.do`
- `/inboundCalls/getReturned.do`
- `/inboundCalls/getScrubbed.do`
- `/inboundCalls/getTransferred.do`
- `/leadDistributionContracts/addFilter.do`
- `/leadDistributionContracts/adjustCredit.do`
- `/leadDistributionContracts/assignSMSDeliveryMethod.do`
- `/leadDistributionContracts/create.do`
- `/leadDistributionContracts/createSchedule.do`
- `/leadDistributionContracts/setPrice.do`
- `/leadDistributionContracts/updateAutoRechargeSettings.do`
- `/leadDistributionContracts/updatePortalSettings.do`
- `/leadDistributionContracts/updateReturnsSettings.do`
- `/leadDistributionContracts/updateSchedule.do`
- `/leads/getAll.do`
- `/leads/getDelivered.do`
- `/leads/getPosts.do`
- `/leads/getQueue.do`
- `/leads/getReturns.do`
- `/leads/getReview.do`
- `/leads/getScrubbed.do`
- `/leads/getSold.do`
- `/leads/getTrash.do`
- `/leads/returnLead.do`
- `/leads/returnLeadFromAllContracts.do`
- `/leads/updateLeadSoldPrice.do`
- `/leads/updatePayout.do`
- `/leadsReports/getCampaignsLeadsCapReport.do`
- `/leadsReports/getCampaignsLeadsFieldsCapReport.do`
- `/leadsReports/getContractsLeadsCapReport.do`
- `/leadsReports/getLeadDistributionReport.do`
- `/leadsReports/getLeadsByAdvertisersDailyReport.do`
- `/leadsReports/getLeadsByAdvertisersReport.do`
- `/leadsReports/getLeadsByAffiliatesDailyReport.do`
- `/leadsReports/getLeadsByAffiliatesReport.do`
- `/leadsReports/getLeadsByCampaignsReport.do`
- `/leadsReports/getLeadsByContractsReport.do`
- `/leadsReports/getLeadsByOffersReport.do`
- `/leadsReports/getLeadsBySubAffiliatesReport.do`
- `/leadsReports/getLeadsByVerticalsReport.do`
- `/leadsReports/getPingPostReport.do`
- `/list/getAll.do`
- `/offers/getAll.do`
- `/offers/updateBasicInfo.do`
- `/offers/updateTermsSettings.do`
- `/reports/getAdvertisersReport.do`
- `/reports/getAffiliatesReport.do`
- `/reports/getCampaignsReport.do`
- `/reports/getContractsReport.do`
- `/reports/getOffersReport.do`
- `/requests/getAll.do`
- `/verticals/getAll.do`
- `/verticals/update.do`
