# Leadspedia

The public LeadsPedia API contract generated from the published developer documentation.


## Installation & Usage

### Requirements

PHP 8.2, 8.3, 8.4, or 8.5.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/diablomedia/leadspedia-php-sdk.git"
    }
  ],
  "require": {
    "diablomedia/leadspedia-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Leadspedia/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$type = 'type_example'; // string
$amount = 56; // int
$charge = 'No'; // string | If Yes, the default credit card of the advertiser will be charged
$transactionFee = 'transactionFee_example'; // string
$transactionFeeAmount = 56; // int
$transactionFeePercentage = 56; // int
$generateInvoice = 'No'; // string | If Yes and the type is Credit, an invoice will be generated
$note = 'note_example'; // string

try {
    $result = $apiInstance->advertisersadjustCreditdo($advertiserID, $type, $amount, $charge, $transactionFee, $transactionFeeAmount, $transactionFeePercentage, $generateInvoice, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersadjustCreditdo: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.leadspedia.com/core/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvertisersApi* | [**advertisersadjustCreditdo**](docs/Api/AdvertisersApi.md#advertisersadjustcreditdo) | **POST** /advertisers/adjustCredit.do | Adjust Credit
*AdvertisersApi* | [**advertiserschangeStatusdo**](docs/Api/AdvertisersApi.md#advertiserschangestatusdo) | **POST** /advertisers/changeStatus.do | Change Status
*AdvertisersApi* | [**advertiserscreatedo**](docs/Api/AdvertisersApi.md#advertiserscreatedo) | **POST** /advertisers/create.do | Create
*AdvertisersApi* | [**advertisersdeletedo**](docs/Api/AdvertisersApi.md#advertisersdeletedo) | **POST** /advertisers/delete.do | Delete
*AdvertisersApi* | [**advertisersenableCreditdo**](docs/Api/AdvertisersApi.md#advertisersenablecreditdo) | **POST** /advertisers/enableCredit.do | Enable Credit
*AdvertisersApi* | [**advertisersgenerateInvoicesdo**](docs/Api/AdvertisersApi.md#advertisersgenerateinvoicesdo) | **POST** /advertisers/generateInvoices.do | Generate Invoices
*AdvertisersApi* | [**advertisersgetAlldo**](docs/Api/AdvertisersApi.md#advertisersgetalldo) | **GET** /advertisers/getAll.do | Get All
*AdvertisersApi* | [**advertisersgetCreditHistorydo**](docs/Api/AdvertisersApi.md#advertisersgetcredithistorydo) | **GET** /advertisers/getCreditHistory.do | Get Credit History
*AdvertisersApi* | [**advertisersgetInfodo**](docs/Api/AdvertisersApi.md#advertisersgetinfodo) | **GET** /advertisers/getInfo.do | Get
*AdvertisersApi* | [**advertiserssearchdo**](docs/Api/AdvertisersApi.md#advertiserssearchdo) | **GET** /advertisers/search.do | Search
*AdvertisersApi* | [**advertisersupdateAuthorizeNetCustomerProfileIDdo**](docs/Api/AdvertisersApi.md#advertisersupdateauthorizenetcustomerprofileiddo) | **POST** /advertisers/updateAuthorizeNetCustomerProfileID.do | Update Authorize Net Customer Profile ID
*AdvertisersApi* | [**advertisersupdateAutoRechargeSettingsdo**](docs/Api/AdvertisersApi.md#advertisersupdateautorechargesettingsdo) | **POST** /advertisers/updateAutoRechargeSettings.do | Update Auto Recharge Settings
*AdvertisersApi* | [**advertisersupdateBillingdo**](docs/Api/AdvertisersApi.md#advertisersupdatebillingdo) | **POST** /advertisers/updateBilling.do | Update Billing
*AdvertisersApi* | [**advertisersupdateInfodo**](docs/Api/AdvertisersApi.md#advertisersupdateinfodo) | **POST** /advertisers/updateInfo.do | Update
*AdvertisersApi* | [**advertisersupdateLeadsCapsdo**](docs/Api/AdvertisersApi.md#advertisersupdateleadscapsdo) | **POST** /advertisers/updateLeadsCaps.do | Update Leads Caps
*AdvertisersApi* | [**advertisersupdateLeadsDailyCapdo**](docs/Api/AdvertisersApi.md#advertisersupdateleadsdailycapdo) | **POST** /advertisers/updateLeadsDailyCap.do | Update Leads Daily Cap
*AdvertisersApi* | [**advertisersupdateLeadsDailyRevenueCapdo**](docs/Api/AdvertisersApi.md#advertisersupdateleadsdailyrevenuecapdo) | **POST** /advertisers/updateLeadsDailyRevenueCap.do | Update Leads Daily Revenue Caps
*AdvertisersApi* | [**advertisersupdateLeadsMonthlyCapdo**](docs/Api/AdvertisersApi.md#advertisersupdateleadsmonthlycapdo) | **POST** /advertisers/updateLeadsMonthlyCap.do | Update Leads Monthly Cap
*AdvertisersApi* | [**advertisersupdateLeadsMonthlyRevenueCapdo**](docs/Api/AdvertisersApi.md#advertisersupdateleadsmonthlyrevenuecapdo) | **POST** /advertisers/updateLeadsMonthlyRevenueCap.do | Update Leads Monthly Revenue Caps
*AdvertisersApi* | [**advertisersupdateLeadsRevenueCapsdo**](docs/Api/AdvertisersApi.md#advertisersupdateleadsrevenuecapsdo) | **POST** /advertisers/updateLeadsRevenueCaps.do | Update Leads Revenue Caps
*AdvertisersApi* | [**advertisersupdateLeadsWeeklyCapdo**](docs/Api/AdvertisersApi.md#advertisersupdateleadsweeklycapdo) | **POST** /advertisers/updateLeadsWeeklyCap.do | Update Leads Weekly Cap
*AdvertisersApi* | [**advertisersupdateLeadsWeeklyRevenueCapdo**](docs/Api/AdvertisersApi.md#advertisersupdateleadsweeklyrevenuecapdo) | **POST** /advertisers/updateLeadsWeeklyRevenueCap.do | Update Leads Weekly Revenue Cap
*AdvertisersApi* | [**advertisersupdatePortalSettingsdo**](docs/Api/AdvertisersApi.md#advertisersupdateportalsettingsdo) | **POST** /advertisers/updatePortalSettings.do | Update Portal Settings
*AdvertisersCreditCardsApi* | [**advertisersCreditCardsadddo**](docs/Api/AdvertisersCreditCardsApi.md#advertiserscreditcardsadddo) | **POST** /advertisersCreditCards/add.do | Add
*AdvertisersCreditCardsApi* | [**advertisersCreditCardsdeletedo**](docs/Api/AdvertisersCreditCardsApi.md#advertiserscreditcardsdeletedo) | **POST** /advertisersCreditCards/delete.do | Delete
*AdvertisersCreditCardsApi* | [**advertisersCreditCardsgetAlldo**](docs/Api/AdvertisersCreditCardsApi.md#advertiserscreditcardsgetalldo) | **GET** /advertisersCreditCards/getAll.do | Get All
*AdvertisersCreditCardsApi* | [**advertisersCreditCardsgetDefaultdo**](docs/Api/AdvertisersCreditCardsApi.md#advertiserscreditcardsgetdefaultdo) | **GET** /advertisersCreditCards/getDefault.do | Get Default
*AdvertisersCreditCardsApi* | [**advertisersCreditCardsgetInfodo**](docs/Api/AdvertisersCreditCardsApi.md#advertiserscreditcardsgetinfodo) | **GET** /advertisersCreditCards/getInfo.do | Get Info
*AdvertisersCreditCardsApi* | [**advertisersCreditCardssetDefaultdo**](docs/Api/AdvertisersCreditCardsApi.md#advertiserscreditcardssetdefaultdo) | **POST** /advertisersCreditCards/setDefault.do | Set Default
*AdvertisersCreditCardsApi* | [**advertisersCreditCardsupdatePaymentProfileIDdo**](docs/Api/AdvertisersCreditCardsApi.md#advertiserscreditcardsupdatepaymentprofileiddo) | **POST** /advertisersCreditCards/updatePaymentProfileID.do | Update Payment Profile ID
*AdvertisersCreditCardsApi* | [**advertisersCreditCardsupdatedo**](docs/Api/AdvertisersCreditCardsApi.md#advertiserscreditcardsupdatedo) | **POST** /advertisersCreditCards/update.do | Update
*AffiliatesApi* | [**affiliateschangeStatusdo**](docs/Api/AffiliatesApi.md#affiliateschangestatusdo) | **POST** /affiliates/changeStatus.do | Change Status
*AffiliatesApi* | [**affiliatescreatedo**](docs/Api/AffiliatesApi.md#affiliatescreatedo) | **POST** /affiliates/create.do | Create
*AffiliatesApi* | [**affiliatesdeletedo**](docs/Api/AffiliatesApi.md#affiliatesdeletedo) | **POST** /affiliates/delete.do | Delete
*AffiliatesApi* | [**affiliatesgetAlldo**](docs/Api/AffiliatesApi.md#affiliatesgetalldo) | **GET** /affiliates/getAll.do | Get All
*AffiliatesApi* | [**affiliatesgetInfodo**](docs/Api/AffiliatesApi.md#affiliatesgetinfodo) | **GET** /affiliates/getInfo.do | Get
*AffiliatesApi* | [**affiliatessearchdo**](docs/Api/AffiliatesApi.md#affiliatessearchdo) | **GET** /affiliates/search.do | Search
*AffiliatesApi* | [**affiliatesupdateBillingdo**](docs/Api/AffiliatesApi.md#affiliatesupdatebillingdo) | **POST** /affiliates/updateBilling.do | Update Billing
*AffiliatesApi* | [**affiliatesupdateInfodo**](docs/Api/AffiliatesApi.md#affiliatesupdateinfodo) | **POST** /affiliates/updateInfo.do | Update
*AudioApi* | [**audiodeletedo**](docs/Api/AudioApi.md#audiodeletedo) | **POST** /audio/delete.do | Delete
*AudioApi* | [**audiogetAlldo**](docs/Api/AudioApi.md#audiogetalldo) | **GET** /audio/getAll.do | Get All
*BlockedCallerIDsApi* | [**blockedCallerIDsadddo**](docs/Api/BlockedCallerIDsApi.md#blockedcalleridsadddo) | **POST** /blockedCallerIDs/add.do | Block Caller ID
*CallRoutingContractsApi* | [**callRoutingContractsaddToOfferdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsaddtoofferdo) | **POST** /callRoutingContracts/addToOffer.do | Add to Offer
*CallRoutingContractsApi* | [**callRoutingContractsadjustCreditdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsadjustcreditdo) | **POST** /callRoutingContracts/adjustCredit.do | Adjust Credit
*CallRoutingContractsApi* | [**callRoutingContractschangeModedo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractschangemodedo) | **POST** /callRoutingContracts/changeMode.do | Change Mode
*CallRoutingContractsApi* | [**callRoutingContractschangeStatusdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractschangestatusdo) | **POST** /callRoutingContracts/changeStatus.do | Change Status
*CallRoutingContractsApi* | [**callRoutingContractscreatedo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractscreatedo) | **POST** /callRoutingContracts/create.do | Create
*CallRoutingContractsApi* | [**callRoutingContractsdeleteScheduledPausedo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsdeletescheduledpausedo) | **POST** /callRoutingContracts/deleteScheduledPause.do | Delete Schedule Pause
*CallRoutingContractsApi* | [**callRoutingContractsdeletedo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsdeletedo) | **POST** /callRoutingContracts/delete.do | Delete
*CallRoutingContractsApi* | [**callRoutingContractsenableCreditdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsenablecreditdo) | **POST** /callRoutingContracts/enableCredit.do | Enable Credit
*CallRoutingContractsApi* | [**callRoutingContractsgetAlldo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetalldo) | **GET** /callRoutingContracts/getAll.do | Get All
*CallRoutingContractsApi* | [**callRoutingContractsgetBasicInfodo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetbasicinfodo) | **GET** /callRoutingContracts/getBasicInfo.do | Get
*CallRoutingContractsApi* | [**callRoutingContractsgetBillableTransfersCapInfodo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetbillabletransferscapinfodo) | **GET** /callRoutingContracts/getBillableTransfersCapInfo.do | Get Billable Transfers Cap
*CallRoutingContractsApi* | [**callRoutingContractsgetCreditHistorydo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetcredithistorydo) | **GET** /callRoutingContracts/getCreditHistory.do | Get Credit History
*CallRoutingContractsApi* | [**callRoutingContractsgetOffersdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetoffersdo) | **GET** /callRoutingContracts/getOffers.do | Get Attached Offers
*CallRoutingContractsApi* | [**callRoutingContractsgetPortalSettingsdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetportalsettingsdo) | **GET** /callRoutingContracts/getPortalSettings.do | Get Portal Settings
*CallRoutingContractsApi* | [**callRoutingContractsgetPostbackSettingsdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetpostbacksettingsdo) | **GET** /callRoutingContracts/getPostbackSettings.do | Get Postback Settings
*CallRoutingContractsApi* | [**callRoutingContractsgetRepeatCallsSettingsdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetrepeatcallssettingsdo) | **GET** /callRoutingContracts/getRepeatCallsSettings.do | Get Repeat Calls Settings
*CallRoutingContractsApi* | [**callRoutingContractsgetReturnsSettingsdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetreturnssettingsdo) | **GET** /callRoutingContracts/getReturnsSettings.do | Get Return Settings
*CallRoutingContractsApi* | [**callRoutingContractsgetRevenueCapInfodo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetrevenuecapinfodo) | **GET** /callRoutingContracts/getRevenueCapInfo.do | Get Revenue Cap
*CallRoutingContractsApi* | [**callRoutingContractsgetScheduledPausedo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetscheduledpausedo) | **GET** /callRoutingContracts/getScheduledPause.do | Get Scheduled Pause
*CallRoutingContractsApi* | [**callRoutingContractsgetTransfersCapInfodo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgettransferscapinfodo) | **GET** /callRoutingContracts/getTransfersCapInfo.do | Get Transfers Cap
*CallRoutingContractsApi* | [**callRoutingContractsgetZipCodeTargetingdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsgetzipcodetargetingdo) | **GET** /callRoutingContracts/getZipCodeTargeting.do | Get Zip Code Targeting
*CallRoutingContractsApi* | [**callRoutingContractsremoveContractFromOfferdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsremovecontractfromofferdo) | **POST** /callRoutingContracts/removeContractFromOffer.do | Remove From Offer
*CallRoutingContractsApi* | [**callRoutingContractsremoveExpirationDatedo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsremoveexpirationdatedo) | **POST** /callRoutingContracts/removeExpirationDate.do | Remove Expiration Date
*CallRoutingContractsApi* | [**callRoutingContractsrenamedo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsrenamedo) | **POST** /callRoutingContracts/rename.do | Rename
*CallRoutingContractsApi* | [**callRoutingContractsschedulePausedo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsschedulepausedo) | **POST** /callRoutingContracts/schedulePause.do | Create Schedule Pause
*CallRoutingContractsApi* | [**callRoutingContractssetExpirationDatedo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractssetexpirationdatedo) | **POST** /callRoutingContracts/setExpirationDate.do | Set Expiration Date
*CallRoutingContractsApi* | [**callRoutingContractsupdateAutoRechargeSettingsdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdateautorechargesettingsdo) | **POST** /callRoutingContracts/updateAutoRechargeSettings.do | Update Auto Recharge Settings
*CallRoutingContractsApi* | [**callRoutingContractsupdateBasicInfodo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdatebasicinfodo) | **POST** /callRoutingContracts/updateBasicInfo.do | Update
*CallRoutingContractsApi* | [**callRoutingContractsupdateBillableTransfersCapdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdatebillabletransferscapdo) | **POST** /callRoutingContracts/updateBillableTransfersCap.do | Update Billable Transfers Cap
*CallRoutingContractsApi* | [**callRoutingContractsupdateDistributionTimeoutdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdatedistributiontimeoutdo) | **POST** /callRoutingContracts/updateDistributionTimeout.do | Update Dial Timeout
*CallRoutingContractsApi* | [**callRoutingContractsupdatePortalSettingsdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdateportalsettingsdo) | **POST** /callRoutingContracts/updatePortalSettings.do | Update Portal Settings
*CallRoutingContractsApi* | [**callRoutingContractsupdatePostbackSettingsdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdatepostbacksettingsdo) | **POST** /callRoutingContracts/updatePostbackSettings.do | Update Postback Settings
*CallRoutingContractsApi* | [**callRoutingContractsupdateRepeatCallsSettingsdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdaterepeatcallssettingsdo) | **POST** /callRoutingContracts/updateRepeatCallsSettings.do | Update Repeat Call Settings
*CallRoutingContractsApi* | [**callRoutingContractsupdateReturnsSettingsdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdatereturnssettingsdo) | **POST** /callRoutingContracts/updateReturnsSettings.do | Update Return Settings
*CallRoutingContractsApi* | [**callRoutingContractsupdateRevenueCapdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdaterevenuecapdo) | **POST** /callRoutingContracts/updateRevenueCap.do | Update Revenue Cap
*CallRoutingContractsApi* | [**callRoutingContractsupdateRevenueModeldo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdaterevenuemodeldo) | **POST** /callRoutingContracts/updateRevenueModel.do | Update Revenue Model
*CallRoutingContractsApi* | [**callRoutingContractsupdateTransferNumberdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdatetransfernumberdo) | **POST** /callRoutingContracts/updateTransferNumber.do | Update Transfer Number
*CallRoutingContractsApi* | [**callRoutingContractsupdateTransfersCapdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdatetransferscapdo) | **POST** /callRoutingContracts/updateTransfersCap.do | Update Transfers Cap
*CallRoutingContractsApi* | [**callRoutingContractsupdateZipCodeTargetingdo**](docs/Api/CallRoutingContractsApi.md#callroutingcontractsupdatezipcodetargetingdo) | **POST** /callRoutingContracts/updateZipCodeTargeting.do | Update Zip Code Targeting
*CallRoutingRulesApi* | [**callRoutingRulescreatedo**](docs/Api/CallRoutingRulesApi.md#callroutingrulescreatedo) | **POST** /callRoutingRules/create.do | Create
*CallRoutingRulesApi* | [**callRoutingRulesdeletedo**](docs/Api/CallRoutingRulesApi.md#callroutingrulesdeletedo) | **POST** /callRoutingRules/delete.do | Delete
*CallRoutingRulesApi* | [**callRoutingRulesgetAlldo**](docs/Api/CallRoutingRulesApi.md#callroutingrulesgetalldo) | **GET** /callRoutingRules/getAll.do | Get All
*CallTrackingReportsApi* | [**callTrackingReportsgetCallRoutingReportdo**](docs/Api/CallTrackingReportsApi.md#calltrackingreportsgetcallroutingreportdo) | **GET** /callTrackingReports/getCallRoutingReport.do | Call Routing
*CallTrackingReportsApi* | [**callTrackingReportsgetCallsByAdvertisersDailyReportdo**](docs/Api/CallTrackingReportsApi.md#calltrackingreportsgetcallsbyadvertisersdailyreportdo) | **GET** /callTrackingReports/getCallsByAdvertisersDailyReport.do | Daily Calls by Advertisers
*CallTrackingReportsApi* | [**callTrackingReportsgetCallsByAdvertisersReportdo**](docs/Api/CallTrackingReportsApi.md#calltrackingreportsgetcallsbyadvertisersreportdo) | **GET** /callTrackingReports/getCallsByAdvertisersReport.do | Calls by Advertisers
*CallTrackingReportsApi* | [**callTrackingReportsgetCallsByAffiliatesDailyReportdo**](docs/Api/CallTrackingReportsApi.md#calltrackingreportsgetcallsbyaffiliatesdailyreportdo) | **GET** /callTrackingReports/getCallsByAffiliatesDailyReport.do | Daily Calls by Affiliates
*CallTrackingReportsApi* | [**callTrackingReportsgetCallsByAffiliatesReportdo**](docs/Api/CallTrackingReportsApi.md#calltrackingreportsgetcallsbyaffiliatesreportdo) | **GET** /callTrackingReports/getCallsByAffiliatesReport.do | Calls by Affiliates
*CallTrackingReportsApi* | [**callTrackingReportsgetCallsByCampaignsReportdo**](docs/Api/CallTrackingReportsApi.md#calltrackingreportsgetcallsbycampaignsreportdo) | **GET** /callTrackingReports/getCallsByCampaignsReport.do | Calls by Campaigns
*CallTrackingReportsApi* | [**callTrackingReportsgetCallsByContractsReportdo**](docs/Api/CallTrackingReportsApi.md#calltrackingreportsgetcallsbycontractsreportdo) | **GET** /callTrackingReports/getCallsByContractsReport.do | Calls by Contracts
*CallTrackingReportsApi* | [**callTrackingReportsgetCallsByOffersReportdo**](docs/Api/CallTrackingReportsApi.md#calltrackingreportsgetcallsbyoffersreportdo) | **GET** /callTrackingReports/getCallsByOffersReport.do | Calls by Offers
*CallTrackingReportsApi* | [**callTrackingReportsgetCallsBySubAffiliatesReportdo**](docs/Api/CallTrackingReportsApi.md#calltrackingreportsgetcallsbysubaffiliatesreportdo) | **GET** /callTrackingReports/getCallsBySubAffiliatesReport.do | Calls by Sub Affiliates
*CallTrackingReportsApi* | [**callTrackingReportsgetCallsByVerticalsReportdo**](docs/Api/CallTrackingReportsApi.md#calltrackingreportsgetcallsbyverticalsreportdo) | **GET** /callTrackingReports/getCallsByVerticalsReport.do | Calls by Verticals
*CampaignsApi* | [**campaignsaddFilterdo**](docs/Api/CampaignsApi.md#campaignsaddfilterdo) | **POST** /campaigns/addFilter.do | Add Filter
*CampaignsApi* | [**campaignsassignTrackingNumberdo**](docs/Api/CampaignsApi.md#campaignsassigntrackingnumberdo) | **POST** /campaigns/assignTrackingNumber.do | Assign Tracking Number
*CampaignsApi* | [**campaignschangeModedo**](docs/Api/CampaignsApi.md#campaignschangemodedo) | **POST** /campaigns/changeMode.do | Change Mode
*CampaignsApi* | [**campaignschangeStatusdo**](docs/Api/CampaignsApi.md#campaignschangestatusdo) | **POST** /campaigns/changeStatus.do | Change Status
*CampaignsApi* | [**campaignscreateFieldsPayoutdo**](docs/Api/CampaignsApi.md#campaignscreatefieldspayoutdo) | **POST** /campaigns/createFieldsPayout.do | Create Fields Payout
*CampaignsApi* | [**campaignsdeleteFieldsPayoutdo**](docs/Api/CampaignsApi.md#campaignsdeletefieldspayoutdo) | **POST** /campaigns/deleteFieldsPayout.do | Delete Fields Payout
*CampaignsApi* | [**campaignsdeleteFilterdo**](docs/Api/CampaignsApi.md#campaignsdeletefilterdo) | **POST** /campaigns/deleteFilter.do | Delete Filter
*CampaignsApi* | [**campaignsdeletedo**](docs/Api/CampaignsApi.md#campaignsdeletedo) | **POST** /campaigns/delete.do | Delete
*CampaignsApi* | [**campaignsgetAlldo**](docs/Api/CampaignsApi.md#campaignsgetalldo) | **GET** /campaigns/getAll.do | Get All
*CampaignsApi* | [**campaignsgetBasicInfodo**](docs/Api/CampaignsApi.md#campaignsgetbasicinfodo) | **GET** /campaigns/getBasicInfo.do | Get
*CampaignsApi* | [**campaignsgetFieldsPayoutsdo**](docs/Api/CampaignsApi.md#campaignsgetfieldspayoutsdo) | **GET** /campaigns/getFieldsPayouts.do | Get Fields Payouts
*CampaignsApi* | [**campaignsgetFiltersdo**](docs/Api/CampaignsApi.md#campaignsgetfiltersdo) | **GET** /campaigns/getFilters.do | Get Filters
*CampaignsApi* | [**campaignsrenamedo**](docs/Api/CampaignsApi.md#campaignsrenamedo) | **POST** /campaigns/rename.do | Rename
*CampaignsApi* | [**campaignsunassignTrackingNumberdo**](docs/Api/CampaignsApi.md#campaignsunassigntrackingnumberdo) | **POST** /campaigns/unassignTrackingNumber.do | Unassign Tracking Number
*CampaignsApi* | [**campaignsupdateBasicInfodo**](docs/Api/CampaignsApi.md#campaignsupdatebasicinfodo) | **POST** /campaigns/updateBasicInfo.do | Update
*CampaignsApi* | [**campaignsupdateCallPostbackURLdo**](docs/Api/CampaignsApi.md#campaignsupdatecallpostbackurldo) | **POST** /campaigns/updateCallPostbackURL.do | Update Call Postback Pixel
*CampaignsApi* | [**campaignsupdateFieldsPayoutdo**](docs/Api/CampaignsApi.md#campaignsupdatefieldspayoutdo) | **POST** /campaigns/updateFieldsPayout.do | Update Fields Payout
*CampaignsApi* | [**campaignsupdatePostbackURLdo**](docs/Api/CampaignsApi.md#campaignsupdatepostbackurldo) | **POST** /campaigns/updatePostbackURL.do | Update Lead Postback Pixel
*ClicksReportsApi* | [**clicksReportsgetClicksByCampaignsReportdo**](docs/Api/ClicksReportsApi.md#clicksreportsgetclicksbycampaignsreportdo) | **GET** /clicksReports/getClicksByCampaignsReport.do | Clicks by Campaigns
*ContractFieldRevenueRulesApi* | [**contractFieldRevenueRulescreatedo**](docs/Api/ContractFieldRevenueRulesApi.md#contractfieldrevenuerulescreatedo) | **POST** /contractFieldRevenueRules/create.do | Create
*ContractFieldRevenueRulesApi* | [**contractFieldRevenueRulesdeletedo**](docs/Api/ContractFieldRevenueRulesApi.md#contractfieldrevenuerulesdeletedo) | **POST** /contractFieldRevenueRules/delete.do | Delete
*ContractFieldRevenueRulesApi* | [**contractFieldRevenueRulesgetAlldo**](docs/Api/ContractFieldRevenueRulesApi.md#contractfieldrevenuerulesgetalldo) | **GET** /contractFieldRevenueRules/getAll.do | Get All
*ContractFieldRevenueRulesApi* | [**contractFieldRevenueRulesupdatedo**](docs/Api/ContractFieldRevenueRulesApi.md#contractfieldrevenuerulesupdatedo) | **POST** /contractFieldRevenueRules/update.do | Update
*ConversionsApi* | [**conversionsgetAlldo**](docs/Api/ConversionsApi.md#conversionsgetalldo) | **GET** /conversions/getAll.do | Get All Conversions
*ConversionsReportsApi* | [**conversionsReportsgetConversionsByAdvertisersReportdo**](docs/Api/ConversionsReportsApi.md#conversionsreportsgetconversionsbyadvertisersreportdo) | **GET** /conversionsReports/getConversionsByAdvertisersReport.do | Conversions by Advertisers
*ConversionsReportsApi* | [**conversionsReportsgetConversionsByAffiliatesReportdo**](docs/Api/ConversionsReportsApi.md#conversionsreportsgetconversionsbyaffiliatesreportdo) | **GET** /conversionsReports/getConversionsByAffiliatesReport.do | Conversions by Affiliates
*ConversionsReportsApi* | [**conversionsReportsgetConversionsByCampaignsReportdo**](docs/Api/ConversionsReportsApi.md#conversionsreportsgetconversionsbycampaignsreportdo) | **GET** /conversionsReports/getConversionsByCampaignsReport.do | Conversions by Campaigns
*ConversionsReportsApi* | [**conversionsReportsgetConversionsByOffersReportdo**](docs/Api/ConversionsReportsApi.md#conversionsreportsgetconversionsbyoffersreportdo) | **GET** /conversionsReports/getConversionsByOffersReport.do | Conversions by Offers
*ConversionsReportsApi* | [**conversionsReportsgetConversionsBySourceReportdo**](docs/Api/ConversionsReportsApi.md#conversionsreportsgetconversionsbysourcereportdo) | **GET** /conversionsReports/getConversionsBySourceReport.do | Conversions by Source
*ConversionsReportsApi* | [**conversionsReportsgetConversionsBySubAffiliatesReportdo**](docs/Api/ConversionsReportsApi.md#conversionsreportsgetconversionsbysubaffiliatesreportdo) | **GET** /conversionsReports/getConversionsBySubAffiliatesReport.do | Conversions by Sub Affiliates
*ConversionsReportsApi* | [**conversionsReportsgetConversionsByVerticalsReportdo**](docs/Api/ConversionsReportsApi.md#conversionsreportsgetconversionsbyverticalsreportdo) | **GET** /conversionsReports/getConversionsByVerticalsReport.do | Conversions by Verticals
*ConversionsReportsApi* | [**conversionsReportsgetConversionsDailyReportdo**](docs/Api/ConversionsReportsApi.md#conversionsreportsgetconversionsdailyreportdo) | **GET** /conversionsReports/getConversionsDailyReport.do | Daily Conversions
*DeliveryMethodsApi* | [**deliveryMethodsgetAlldo**](docs/Api/DeliveryMethodsApi.md#deliverymethodsgetalldo) | **GET** /deliveryMethods/getAll.do | Get All
*DncApi* | [**dncadddo**](docs/Api/DncApi.md#dncadddo) | **POST** /dnc/add.do | Add to DNC list
*DncApi* | [**dnccheckdo**](docs/Api/DncApi.md#dnccheckdo) | **GET** /dnc/check.do | Check DNC list
*DncApi* | [**dncdeleteByEmaildo**](docs/Api/DncApi.md#dncdeletebyemaildo) | **POST** /dnc/deleteByEmail.do | Delete DNC by Email
*DncApi* | [**dncdeleteByPhonedo**](docs/Api/DncApi.md#dncdeletebyphonedo) | **POST** /dnc/deleteByPhone.do | Delete DNC by Phone
*InboundCallsApi* | [**inboundCallsgetAlldo**](docs/Api/InboundCallsApi.md#inboundcallsgetalldo) | **GET** /inboundCalls/getAll.do | Get All
*InboundCallsApi* | [**inboundCallsgetCallIntegrationsLogdo**](docs/Api/InboundCallsApi.md#inboundcallsgetcallintegrationslogdo) | **GET** /inboundCalls/getCallIntegrationsLog.do | Get Call Integrations Log
*InboundCallsApi* | [**inboundCallsgetInProgressdo**](docs/Api/InboundCallsApi.md#inboundcallsgetinprogressdo) | **GET** /inboundCalls/getInProgress.do | Get Calls In Progress
*InboundCallsApi* | [**inboundCallsgetNumbersdo**](docs/Api/InboundCallsApi.md#inboundcallsgetnumbersdo) | **GET** /inboundCalls/getNumbers.do | Get All
*InboundCallsApi* | [**inboundCallsgetOneStepPingTreeLogdo**](docs/Api/InboundCallsApi.md#inboundcallsgetonesteppingtreelogdo) | **GET** /inboundCalls/getOneStepPingTreeLog.do | Get One Step Ping Tree Log
*InboundCallsApi* | [**inboundCallsgetRecordingURLdo**](docs/Api/InboundCallsApi.md#inboundcallsgetrecordingurldo) | **GET** /inboundCalls/getRecordingURL.do | Get Call Recording URL
*InboundCallsApi* | [**inboundCallsgetReturneddo**](docs/Api/InboundCallsApi.md#inboundcallsgetreturneddo) | **GET** /inboundCalls/getReturned.do | Get Returned Calls
*InboundCallsApi* | [**inboundCallsgetScrubbeddo**](docs/Api/InboundCallsApi.md#inboundcallsgetscrubbeddo) | **GET** /inboundCalls/getScrubbed.do | Get Scrubbed Calls
*InboundCallsApi* | [**inboundCallsgetTransferreddo**](docs/Api/InboundCallsApi.md#inboundcallsgettransferreddo) | **GET** /inboundCalls/getTransferred.do | Get Transferred Calls
*LeadDistributionContractsApi* | [**leadDistributionContractsaddFilterdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsaddfilterdo) | **POST** /leadDistributionContracts/addFilter.do | Add Filter
*LeadDistributionContractsApi* | [**leadDistributionContractsaddToOfferdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsaddtoofferdo) | **POST** /leadDistributionContracts/addToOffer.do | Add Contract to Offer
*LeadDistributionContractsApi* | [**leadDistributionContractsadjustCreditdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsadjustcreditdo) | **POST** /leadDistributionContracts/adjustCredit.do | Adjust Credit
*LeadDistributionContractsApi* | [**leadDistributionContractsassignEmailDeliveryMethoddo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsassignemaildeliverymethoddo) | **POST** /leadDistributionContracts/assignEmailDeliveryMethod.do | Assign Email Delivery Method
*LeadDistributionContractsApi* | [**leadDistributionContractsassignSMSDeliveryMethoddo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsassignsmsdeliverymethoddo) | **POST** /leadDistributionContracts/assignSMSDeliveryMethod.do | Assign SMS Delivery Method
*LeadDistributionContractsApi* | [**leadDistributionContractschangeModedo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractschangemodedo) | **POST** /leadDistributionContracts/changeMode.do | Change Mode
*LeadDistributionContractsApi* | [**leadDistributionContractschangeStatusdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractschangestatusdo) | **POST** /leadDistributionContracts/changeStatus.do | Change Status
*LeadDistributionContractsApi* | [**leadDistributionContractscreateAffiliateCapdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractscreateaffiliatecapdo) | **POST** /leadDistributionContracts/createAffiliateCap.do | Create Affiliate Cap
*LeadDistributionContractsApi* | [**leadDistributionContractscreateScheduledo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractscreatescheduledo) | **POST** /leadDistributionContracts/createSchedule.do | Create Schedule
*LeadDistributionContractsApi* | [**leadDistributionContractscreatedo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractscreatedo) | **POST** /leadDistributionContracts/create.do | Create
*LeadDistributionContractsApi* | [**leadDistributionContractsdeleteAffiliateCapdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsdeleteaffiliatecapdo) | **POST** /leadDistributionContracts/deleteAffiliateCap.do | Delete Affiliate Cap
*LeadDistributionContractsApi* | [**leadDistributionContractsdeleteAllDeliveryMethodsdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsdeletealldeliverymethodsdo) | **POST** /leadDistributionContracts/deleteAllDeliveryMethods.do | Delete All Delivery Methods
*LeadDistributionContractsApi* | [**leadDistributionContractsdeleteAllSchedulesdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsdeleteallschedulesdo) | **POST** /leadDistributionContracts/deleteAllSchedules.do | Delete All Schedules
*LeadDistributionContractsApi* | [**leadDistributionContractsdeleteFilterdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsdeletefilterdo) | **POST** /leadDistributionContracts/deleteFilter.do | Delete Filter
*LeadDistributionContractsApi* | [**leadDistributionContractsdeleteScheduledPausedo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsdeletescheduledpausedo) | **POST** /leadDistributionContracts/deleteScheduledPause.do | Delete Schedule Pause
*LeadDistributionContractsApi* | [**leadDistributionContractsdeleteScheduledo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsdeletescheduledo) | **POST** /leadDistributionContracts/deleteSchedule.do | Delete Schedule
*LeadDistributionContractsApi* | [**leadDistributionContractsdeletedo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsdeletedo) | **POST** /leadDistributionContracts/delete.do | Delete
*LeadDistributionContractsApi* | [**leadDistributionContractsenableCreditdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsenablecreditdo) | **POST** /leadDistributionContracts/enableCredit.do | Enable Credit
*LeadDistributionContractsApi* | [**leadDistributionContractsgetAffiliateCapsdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetaffiliatecapsdo) | **GET** /leadDistributionContracts/getAffiliateCaps.do | Get Affiliate Caps
*LeadDistributionContractsApi* | [**leadDistributionContractsgetAlldo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetalldo) | **GET** /leadDistributionContracts/getAll.do | Get All
*LeadDistributionContractsApi* | [**leadDistributionContractsgetBasicInfodo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetbasicinfodo) | **GET** /leadDistributionContracts/getBasicInfo.do | Get
*LeadDistributionContractsApi* | [**leadDistributionContractsgetCreditHistorydo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetcredithistorydo) | **GET** /leadDistributionContracts/getCreditHistory.do | Get Credit History
*LeadDistributionContractsApi* | [**leadDistributionContractsgetDuplicatesSettingsdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetduplicatessettingsdo) | **GET** /leadDistributionContracts/getDuplicatesSettings.do | Get Duplicate Settings
*LeadDistributionContractsApi* | [**leadDistributionContractsgetFiltersdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetfiltersdo) | **GET** /leadDistributionContracts/getFilters.do | Get Filters
*LeadDistributionContractsApi* | [**leadDistributionContractsgetLeadsCapInfodo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetleadscapinfodo) | **GET** /leadDistributionContracts/getLeadsCapInfo.do | Get Leads Cap Info
*LeadDistributionContractsApi* | [**leadDistributionContractsgetLeadsSettingsdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetleadssettingsdo) | **GET** /leadDistributionContracts/getLeadsSettings.do | Get Leads Settings
*LeadDistributionContractsApi* | [**leadDistributionContractsgetOffersdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetoffersdo) | **GET** /leadDistributionContracts/getOffers.do | Get Attached Offers
*LeadDistributionContractsApi* | [**leadDistributionContractsgetPortalSettingsdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetportalsettingsdo) | **GET** /leadDistributionContracts/getPortalSettings.do | Get Portal Settings
*LeadDistributionContractsApi* | [**leadDistributionContractsgetReturnsSettingsdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetreturnssettingsdo) | **GET** /leadDistributionContracts/getReturnsSettings.do | Get Return Settings
*LeadDistributionContractsApi* | [**leadDistributionContractsgetRevenueCapInfodo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetrevenuecapinfodo) | **GET** /leadDistributionContracts/getRevenueCapInfo.do | Get Revenue Cap Info
*LeadDistributionContractsApi* | [**leadDistributionContractsgetScheduledPausedo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetscheduledpausedo) | **GET** /leadDistributionContracts/getScheduledPause.do | Get Schedule Pause
*LeadDistributionContractsApi* | [**leadDistributionContractsgetScheduledo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsgetscheduledo) | **GET** /leadDistributionContracts/getSchedule.do | Get Schedule
*LeadDistributionContractsApi* | [**leadDistributionContractsremoveContractFromOfferdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsremovecontractfromofferdo) | **POST** /leadDistributionContracts/removeContractFromOffer.do | Remove from Offer
*LeadDistributionContractsApi* | [**leadDistributionContractsremoveExpirationDatedo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsremoveexpirationdatedo) | **POST** /leadDistributionContracts/removeExpirationDate.do | Remove Expiration Date
*LeadDistributionContractsApi* | [**leadDistributionContractsrenamedo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsrenamedo) | **POST** /leadDistributionContracts/rename.do | Rename
*LeadDistributionContractsApi* | [**leadDistributionContractsschedulePausedo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsschedulepausedo) | **POST** /leadDistributionContracts/schedulePause.do | Create Schedule Pause
*LeadDistributionContractsApi* | [**leadDistributionContractssetExpirationDatedo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractssetexpirationdatedo) | **POST** /leadDistributionContracts/setExpirationDate.do | Set Expiration Date
*LeadDistributionContractsApi* | [**leadDistributionContractssetPricedo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractssetpricedo) | **POST** /leadDistributionContracts/setPrice.do | Set All Schedule Price
*LeadDistributionContractsApi* | [**leadDistributionContractsupdateAutoRechargeSettingsdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsupdateautorechargesettingsdo) | **POST** /leadDistributionContracts/updateAutoRechargeSettings.do | Update Auto Recharge Settings
*LeadDistributionContractsApi* | [**leadDistributionContractsupdateBasicInfodo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsupdatebasicinfodo) | **POST** /leadDistributionContracts/updateBasicInfo.do | Update
*LeadDistributionContractsApi* | [**leadDistributionContractsupdateDistributionPrioritydo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsupdatedistributionprioritydo) | **POST** /leadDistributionContracts/updateDistributionPriority.do | Update Distribution Priority
*LeadDistributionContractsApi* | [**leadDistributionContractsupdateDuplicatesSettingsdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsupdateduplicatessettingsdo) | **POST** /leadDistributionContracts/updateDuplicatesSettings.do | Update Duplicate Settings
*LeadDistributionContractsApi* | [**leadDistributionContractsupdateLeadsCapdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsupdateleadscapdo) | **POST** /leadDistributionContracts/updateLeadsCap.do | Update Leads Cap
*LeadDistributionContractsApi* | [**leadDistributionContractsupdateLeadsSettingsdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsupdateleadssettingsdo) | **POST** /leadDistributionContracts/updateLeadsSettings.do | Update Lead Settings
*LeadDistributionContractsApi* | [**leadDistributionContractsupdatePortalSettingsdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsupdateportalsettingsdo) | **POST** /leadDistributionContracts/updatePortalSettings.do | Update Portal Settings
*LeadDistributionContractsApi* | [**leadDistributionContractsupdateReturnsSettingsdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsupdatereturnssettingsdo) | **POST** /leadDistributionContracts/updateReturnsSettings.do | Update Return Settings
*LeadDistributionContractsApi* | [**leadDistributionContractsupdateRevenueCapdo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsupdaterevenuecapdo) | **POST** /leadDistributionContracts/updateRevenueCap.do | Update Revenue Cap
*LeadDistributionContractsApi* | [**leadDistributionContractsupdateScheduledo**](docs/Api/LeadDistributionContractsApi.md#leaddistributioncontractsupdatescheduledo) | **POST** /leadDistributionContracts/updateSchedule.do | Update Schedule
*LeadRoutingRulesApi* | [**leadRoutingRulescreatedo**](docs/Api/LeadRoutingRulesApi.md#leadroutingrulescreatedo) | **POST** /leadRoutingRules/create.do | Create
*LeadRoutingRulesApi* | [**leadRoutingRulesdeletedo**](docs/Api/LeadRoutingRulesApi.md#leadroutingrulesdeletedo) | **POST** /leadRoutingRules/delete.do | Delete
*LeadRoutingRulesApi* | [**leadRoutingRulesgetAlldo**](docs/Api/LeadRoutingRulesApi.md#leadroutingrulesgetalldo) | **GET** /leadRoutingRules/getAll.do | Get All
*LeadsApi* | [**leadsapproveReturndo**](docs/Api/LeadsApi.md#leadsapprovereturndo) | **POST** /leads/approveReturn.do | Approve Return Request
*LeadsApi* | [**leadsdeleteDatado**](docs/Api/LeadsApi.md#leadsdeletedatado) | **POST** /leads/deleteData.do | Delete Data
*LeadsApi* | [**leadsgetAlldo**](docs/Api/LeadsApi.md#leadsgetalldo) | **GET** /leads/getAll.do | Get All
*LeadsApi* | [**leadsgetDelivereddo**](docs/Api/LeadsApi.md#leadsgetdelivereddo) | **GET** /leads/getDelivered.do | Get Delivered
*LeadsApi* | [**leadsgetLeadDatado**](docs/Api/LeadsApi.md#leadsgetleaddatado) | **GET** /leads/getLeadData.do | Get Lead Data
*LeadsApi* | [**leadsgetLeadInfodo**](docs/Api/LeadsApi.md#leadsgetleadinfodo) | **GET** /leads/getLeadInfo.do | Get Lead Info
*LeadsApi* | [**leadsgetPostbackdo**](docs/Api/LeadsApi.md#leadsgetpostbackdo) | **GET** /leads/getPostback.do | Get Postback
*LeadsApi* | [**leadsgetPostsdo**](docs/Api/LeadsApi.md#leadsgetpostsdo) | **GET** /leads/getPosts.do | Get Posts
*LeadsApi* | [**leadsgetQueuedo**](docs/Api/LeadsApi.md#leadsgetqueuedo) | **GET** /leads/getQueue.do | Get Queue
*LeadsApi* | [**leadsgetReturnsdo**](docs/Api/LeadsApi.md#leadsgetreturnsdo) | **GET** /leads/getReturns.do | Get Returns
*LeadsApi* | [**leadsgetReviewdo**](docs/Api/LeadsApi.md#leadsgetreviewdo) | **GET** /leads/getReview.do | Get Review
*LeadsApi* | [**leadsgetScrubbeddo**](docs/Api/LeadsApi.md#leadsgetscrubbeddo) | **GET** /leads/getScrubbed.do | Get Scrubbed
*LeadsApi* | [**leadsgetSolddo**](docs/Api/LeadsApi.md#leadsgetsolddo) | **GET** /leads/getSold.do | Get Sold
*LeadsApi* | [**leadsgetTrashdo**](docs/Api/LeadsApi.md#leadsgettrashdo) | **GET** /leads/getTrash.do | Get Trash
*LeadsApi* | [**leadsrejectReturndo**](docs/Api/LeadsApi.md#leadsrejectreturndo) | **POST** /leads/rejectReturn.do | Reject Return Request
*LeadsApi* | [**leadsrequestReturndo**](docs/Api/LeadsApi.md#leadsrequestreturndo) | **POST** /leads/requestReturn.do | Request Return
*LeadsApi* | [**leadsreturnLeadFromAllContractsdo**](docs/Api/LeadsApi.md#leadsreturnleadfromallcontractsdo) | **POST** /leads/returnLeadFromAllContracts.do | Return Lead From All Contracts
*LeadsApi* | [**leadsreturnLeaddo**](docs/Api/LeadsApi.md#leadsreturnleaddo) | **POST** /leads/returnLead.do | Return Lead
*LeadsApi* | [**leadsreviewApprovedo**](docs/Api/LeadsApi.md#leadsreviewapprovedo) | **POST** /leads/reviewApprove.do | Review Approve
*LeadsApi* | [**leadsreviewRejectdo**](docs/Api/LeadsApi.md#leadsreviewrejectdo) | **POST** /leads/reviewReject.do | Review Reject
*LeadsApi* | [**leadsscrubLeaddo**](docs/Api/LeadsApi.md#leadsscrubleaddo) | **POST** /leads/scrubLead.do | Scrub Lead
*LeadsApi* | [**leadsunreturnLeaddo**](docs/Api/LeadsApi.md#leadsunreturnleaddo) | **POST** /leads/unreturnLead.do | Unreturn Lead
*LeadsApi* | [**leadsunscrubLeaddo**](docs/Api/LeadsApi.md#leadsunscrubleaddo) | **POST** /leads/unscrubLead.do | Unscrub Lead
*LeadsApi* | [**leadsupdateLeadSoldPricedo**](docs/Api/LeadsApi.md#leadsupdateleadsoldpricedo) | **POST** /leads/updateLeadSoldPrice.do | Update Lead Sold Price
*LeadsApi* | [**leadsupdateLeadStatusdo**](docs/Api/LeadsApi.md#leadsupdateleadstatusdo) | **POST** /leads/updateLeadStatus.do | Update Lead Status
*LeadsApi* | [**leadsupdateLeaddo**](docs/Api/LeadsApi.md#leadsupdateleaddo) | **POST** /leads/updateLead.do | Update Lead Data
*LeadsApi* | [**leadsupdatePayoutdo**](docs/Api/LeadsApi.md#leadsupdatepayoutdo) | **POST** /leads/updatePayout.do | Update Payout
*LeadsReportsApi* | [**leadsReportsgetCampaignsLeadsCapReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetcampaignsleadscapreportdo) | **GET** /leadsReports/getCampaignsLeadsCapReport.do | Leads Caps by Campaigns
*LeadsReportsApi* | [**leadsReportsgetCampaignsLeadsFieldsCapReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetcampaignsleadsfieldscapreportdo) | **GET** /leadsReports/getCampaignsLeadsFieldsCapReport.do | Leads Fields Caps by Campaigns
*LeadsReportsApi* | [**leadsReportsgetContractsLeadsCapReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetcontractsleadscapreportdo) | **GET** /leadsReports/getContractsLeadsCapReport.do | Leads Caps by Contracts
*LeadsReportsApi* | [**leadsReportsgetLeadDistributionReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetleaddistributionreportdo) | **GET** /leadsReports/getLeadDistributionReport.do | Lead Distribution
*LeadsReportsApi* | [**leadsReportsgetLeadsByAdvertisersDailyReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetleadsbyadvertisersdailyreportdo) | **GET** /leadsReports/getLeadsByAdvertisersDailyReport.do | Daily Leads by Advertisers
*LeadsReportsApi* | [**leadsReportsgetLeadsByAdvertisersReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetleadsbyadvertisersreportdo) | **GET** /leadsReports/getLeadsByAdvertisersReport.do | Leads by Advertisers
*LeadsReportsApi* | [**leadsReportsgetLeadsByAffiliatesDailyReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetleadsbyaffiliatesdailyreportdo) | **GET** /leadsReports/getLeadsByAffiliatesDailyReport.do | Daily Leads by Affiliates
*LeadsReportsApi* | [**leadsReportsgetLeadsByAffiliatesReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetleadsbyaffiliatesreportdo) | **GET** /leadsReports/getLeadsByAffiliatesReport.do | Leads by Affiliates
*LeadsReportsApi* | [**leadsReportsgetLeadsByCampaignsReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetleadsbycampaignsreportdo) | **GET** /leadsReports/getLeadsByCampaignsReport.do | Leads by Campaigns
*LeadsReportsApi* | [**leadsReportsgetLeadsByContractsReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetleadsbycontractsreportdo) | **GET** /leadsReports/getLeadsByContractsReport.do | Leads by Contracts
*LeadsReportsApi* | [**leadsReportsgetLeadsByOffersReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetleadsbyoffersreportdo) | **GET** /leadsReports/getLeadsByOffersReport.do | Leads by Offers
*LeadsReportsApi* | [**leadsReportsgetLeadsBySubAffiliatesReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetleadsbysubaffiliatesreportdo) | **GET** /leadsReports/getLeadsBySubAffiliatesReport.do | Leads by Sub Affiliates
*LeadsReportsApi* | [**leadsReportsgetLeadsByVerticalsReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetleadsbyverticalsreportdo) | **GET** /leadsReports/getLeadsByVerticalsReport.do | Leads by Verticals
*LeadsReportsApi* | [**leadsReportsgetOffersLeadsCapReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetoffersleadscapreportdo) | **GET** /leadsReports/getOffersLeadsCapReport.do | Leads Caps by Offers
*LeadsReportsApi* | [**leadsReportsgetPingPostReportdo**](docs/Api/LeadsReportsApi.md#leadsreportsgetpingpostreportdo) | **GET** /leadsReports/getPingPostReport.do | Ping Post
*ListApi* | [**listgetAlldo**](docs/Api/ListApi.md#listgetalldo) | **GET** /list/getAll.do | Get All
*NumbersApi* | [**numbersgetAvailabledo**](docs/Api/NumbersApi.md#numbersgetavailabledo) | **GET** /numbers/getAvailable.do | Get Available
*OffersApi* | [**offerschangeModedo**](docs/Api/OffersApi.md#offerschangemodedo) | **POST** /offers/changeMode.do | Change Mode
*OffersApi* | [**offerschangeStatusdo**](docs/Api/OffersApi.md#offerschangestatusdo) | **POST** /offers/changeStatus.do | Change Status
*OffersApi* | [**offersdeletedo**](docs/Api/OffersApi.md#offersdeletedo) | **POST** /offers/delete.do | Delete
*OffersApi* | [**offersgetAlldo**](docs/Api/OffersApi.md#offersgetalldo) | **GET** /offers/getAll.do | Get All
*OffersApi* | [**offersgetBasicInfodo**](docs/Api/OffersApi.md#offersgetbasicinfodo) | **GET** /offers/getBasicInfo.do | Get
*OffersApi* | [**offersgetCallRoutingContractsdo**](docs/Api/OffersApi.md#offersgetcallroutingcontractsdo) | **GET** /offers/getCallRoutingContracts.do | Get Call Contracts
*OffersApi* | [**offersgetEmailSettingsdo**](docs/Api/OffersApi.md#offersgetemailsettingsdo) | **GET** /offers/getEmailSettings.do | Get Email Settings
*OffersApi* | [**offersgetLeadContractsdo**](docs/Api/OffersApi.md#offersgetleadcontractsdo) | **GET** /offers/getLeadContracts.do | Get Lead Contracts
*OffersApi* | [**offersgetTermsSettingsdo**](docs/Api/OffersApi.md#offersgettermssettingsdo) | **GET** /offers/getTermsSettings.do | Get Terms Settings
*OffersApi* | [**offersremoveExpirationDatedo**](docs/Api/OffersApi.md#offersremoveexpirationdatedo) | **POST** /offers/removeExpirationDate.do | Remove Expiration Date
*OffersApi* | [**offersrenamedo**](docs/Api/OffersApi.md#offersrenamedo) | **POST** /offers/rename.do | Rename
*OffersApi* | [**offerssearchdo**](docs/Api/OffersApi.md#offerssearchdo) | **GET** /offers/search.do | Search
*OffersApi* | [**offerssetExpirationDatedo**](docs/Api/OffersApi.md#offerssetexpirationdatedo) | **POST** /offers/setExpirationDate.do | Set Expiration Date
*OffersApi* | [**offersupdateBasicInfodo**](docs/Api/OffersApi.md#offersupdatebasicinfodo) | **POST** /offers/updateBasicInfo.do | Update
*OffersApi* | [**offersupdateEmailSettingsdo**](docs/Api/OffersApi.md#offersupdateemailsettingsdo) | **POST** /offers/updateEmailSettings.do | Update Email Settings
*OffersApi* | [**offersupdateTermsSettingsdo**](docs/Api/OffersApi.md#offersupdatetermssettingsdo) | **POST** /offers/updateTermsSettings.do | Update Terms Settings
*OffersApi* | [**offersupdateVisibilitydo**](docs/Api/OffersApi.md#offersupdatevisibilitydo) | **POST** /offers/updateVisibility.do | Update Visibility
*ReportsApi* | [**reportsgetAdvertisersReportdo**](docs/Api/ReportsApi.md#reportsgetadvertisersreportdo) | **GET** /reports/getAdvertisersReport.do | Advertisers
*ReportsApi* | [**reportsgetAffiliatesReportdo**](docs/Api/ReportsApi.md#reportsgetaffiliatesreportdo) | **GET** /reports/getAffiliatesReport.do | Affiliates
*ReportsApi* | [**reportsgetCampaignsReportdo**](docs/Api/ReportsApi.md#reportsgetcampaignsreportdo) | **GET** /reports/getCampaignsReport.do | Campaigns
*ReportsApi* | [**reportsgetContractsReportdo**](docs/Api/ReportsApi.md#reportsgetcontractsreportdo) | **GET** /reports/getContractsReport.do | Contracts
*ReportsApi* | [**reportsgetOffersReportdo**](docs/Api/ReportsApi.md#reportsgetoffersreportdo) | **GET** /reports/getOffersReport.do | Offers
*ReportsApi* | [**reportsgetVerticalsReportdo**](docs/Api/ReportsApi.md#reportsgetverticalsreportdo) | **GET** /reports/getVerticalsReport.do | Verticals
*RequestsApi* | [**requestsgetAlldo**](docs/Api/RequestsApi.md#requestsgetalldo) | **GET** /requests/getAll.do | Get All
*VerticalGroupsApi* | [**verticalGroupscreatedo**](docs/Api/VerticalGroupsApi.md#verticalgroupscreatedo) | **POST** /verticalGroups/create.do | Create
*VerticalGroupsApi* | [**verticalGroupsdeletedo**](docs/Api/VerticalGroupsApi.md#verticalgroupsdeletedo) | **POST** /verticalGroups/delete.do | Delete
*VerticalGroupsApi* | [**verticalGroupsgetAlldo**](docs/Api/VerticalGroupsApi.md#verticalgroupsgetalldo) | **GET** /verticalGroups/getAll.do | Get All
*VerticalGroupsApi* | [**verticalGroupsgetInfodo**](docs/Api/VerticalGroupsApi.md#verticalgroupsgetinfodo) | **GET** /verticalGroups/getInfo.do | Get Info
*VerticalGroupsApi* | [**verticalGroupsupdatedo**](docs/Api/VerticalGroupsApi.md#verticalgroupsupdatedo) | **POST** /verticalGroups/update.do | Update
*VerticalsApi* | [**verticalschangeStatusdo**](docs/Api/VerticalsApi.md#verticalschangestatusdo) | **POST** /verticals/changeStatus.do | Change Status
*VerticalsApi* | [**verticalscreatedo**](docs/Api/VerticalsApi.md#verticalscreatedo) | **POST** /verticals/create.do | Create
*VerticalsApi* | [**verticalsdeletedo**](docs/Api/VerticalsApi.md#verticalsdeletedo) | **POST** /verticals/delete.do | Delete
*VerticalsApi* | [**verticalsgetAlldo**](docs/Api/VerticalsApi.md#verticalsgetalldo) | **GET** /verticals/getAll.do | Get All
*VerticalsApi* | [**verticalsgetInfodo**](docs/Api/VerticalsApi.md#verticalsgetinfodo) | **GET** /verticals/getInfo.do | Get
*VerticalsApi* | [**verticalsupdatedo**](docs/Api/VerticalsApi.md#verticalsupdatedo) | **POST** /verticals/update.do | Update

## Models

- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)

## Authorization

Authentication schemes defined for the API:
### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `current`
    - Generator version: `7.27.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
