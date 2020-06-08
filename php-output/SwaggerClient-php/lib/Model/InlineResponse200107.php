<?php
/**
 * InlineResponse200107
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Vincere REST API
 *
 * Last updated date: **2019-12-03**  Change log on **[GitHub](https://github.com/vincere-io/restful-api-support)**
 *
 * OpenAPI spec version: 2-oas3
 * Contact: integration@vincere.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse200107 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200107 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_107';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accounting_system' => 'string',
'pay_method' => 'string',
'consolidation_method' => 'string',
'consolidation_code' => 'string',
'offer_date' => 'string',
'placement_date' => 'string',
'start_date' => 'string',
'end_date' => 'string',
'invoice_date' => 'string',
'terms_days' => 'float',
'invoice_due_date' => 'string',
'net_total' => 'float',
'use_profit_for_net_total' => 'bool',
'other_invoice_items_total' => 'float',
'invoice_total' => 'float',
'invoice_no' => 'string',
'invoice_name' => 'string',
'invoice_code' => 'string',
'sale_tax_gst_vat' => 'float',
'total_pay_calculation' => 'string',
'pay_cycle' => 'string',
'astute_pay_cycle_id' => 'float',
'pay_interval' => 'string',
'profit' => 'float',
'charge_rate' => 'float',
'total_pay_rate' => 'float',
'on_costs_percentage' => 'float',
'on_costs_number' => 'float',
'other_invoice_recipients' => 'string',
'internal_note' => 'string',
'invoice_description' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accounting_system' => null,
'pay_method' => null,
'consolidation_method' => null,
'consolidation_code' => null,
'offer_date' => null,
'placement_date' => null,
'start_date' => null,
'end_date' => null,
'invoice_date' => null,
'terms_days' => null,
'invoice_due_date' => null,
'net_total' => null,
'use_profit_for_net_total' => null,
'other_invoice_items_total' => null,
'invoice_total' => null,
'invoice_no' => null,
'invoice_name' => null,
'invoice_code' => null,
'sale_tax_gst_vat' => null,
'total_pay_calculation' => null,
'pay_cycle' => null,
'astute_pay_cycle_id' => null,
'pay_interval' => null,
'profit' => null,
'charge_rate' => null,
'total_pay_rate' => null,
'on_costs_percentage' => null,
'on_costs_number' => null,
'other_invoice_recipients' => null,
'internal_note' => null,
'invoice_description' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accounting_system' => 'accounting_system',
'pay_method' => 'pay_method',
'consolidation_method' => 'consolidation_method',
'consolidation_code' => 'consolidation_code',
'offer_date' => 'offer_date',
'placement_date' => 'placement_date',
'start_date' => 'start_date',
'end_date' => 'end_date',
'invoice_date' => 'invoice_date',
'terms_days' => 'terms_days',
'invoice_due_date' => 'invoice_due_date',
'net_total' => 'net_total',
'use_profit_for_net_total' => 'use_profit_for_net_total',
'other_invoice_items_total' => 'other_invoice_items_total',
'invoice_total' => 'invoice_total',
'invoice_no' => 'invoice_no',
'invoice_name' => 'invoice_name',
'invoice_code' => 'invoice_code',
'sale_tax_gst_vat' => 'sale_tax_gst_vat',
'total_pay_calculation' => 'total_pay_calculation',
'pay_cycle' => 'pay_cycle',
'astute_pay_cycle_id' => 'astute_pay_cycle_id',
'pay_interval' => 'pay_interval',
'profit' => 'profit',
'charge_rate' => 'charge_rate',
'total_pay_rate' => 'total_pay_rate',
'on_costs_percentage' => 'on_costs_percentage',
'on_costs_number' => 'on_costs_number',
'other_invoice_recipients' => 'other_invoice_recipients',
'internal_note' => 'internal_note',
'invoice_description' => 'invoice_description'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accounting_system' => 'setAccountingSystem',
'pay_method' => 'setPayMethod',
'consolidation_method' => 'setConsolidationMethod',
'consolidation_code' => 'setConsolidationCode',
'offer_date' => 'setOfferDate',
'placement_date' => 'setPlacementDate',
'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'invoice_date' => 'setInvoiceDate',
'terms_days' => 'setTermsDays',
'invoice_due_date' => 'setInvoiceDueDate',
'net_total' => 'setNetTotal',
'use_profit_for_net_total' => 'setUseProfitForNetTotal',
'other_invoice_items_total' => 'setOtherInvoiceItemsTotal',
'invoice_total' => 'setInvoiceTotal',
'invoice_no' => 'setInvoiceNo',
'invoice_name' => 'setInvoiceName',
'invoice_code' => 'setInvoiceCode',
'sale_tax_gst_vat' => 'setSaleTaxGstVat',
'total_pay_calculation' => 'setTotalPayCalculation',
'pay_cycle' => 'setPayCycle',
'astute_pay_cycle_id' => 'setAstutePayCycleId',
'pay_interval' => 'setPayInterval',
'profit' => 'setProfit',
'charge_rate' => 'setChargeRate',
'total_pay_rate' => 'setTotalPayRate',
'on_costs_percentage' => 'setOnCostsPercentage',
'on_costs_number' => 'setOnCostsNumber',
'other_invoice_recipients' => 'setOtherInvoiceRecipients',
'internal_note' => 'setInternalNote',
'invoice_description' => 'setInvoiceDescription'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accounting_system' => 'getAccountingSystem',
'pay_method' => 'getPayMethod',
'consolidation_method' => 'getConsolidationMethod',
'consolidation_code' => 'getConsolidationCode',
'offer_date' => 'getOfferDate',
'placement_date' => 'getPlacementDate',
'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'invoice_date' => 'getInvoiceDate',
'terms_days' => 'getTermsDays',
'invoice_due_date' => 'getInvoiceDueDate',
'net_total' => 'getNetTotal',
'use_profit_for_net_total' => 'getUseProfitForNetTotal',
'other_invoice_items_total' => 'getOtherInvoiceItemsTotal',
'invoice_total' => 'getInvoiceTotal',
'invoice_no' => 'getInvoiceNo',
'invoice_name' => 'getInvoiceName',
'invoice_code' => 'getInvoiceCode',
'sale_tax_gst_vat' => 'getSaleTaxGstVat',
'total_pay_calculation' => 'getTotalPayCalculation',
'pay_cycle' => 'getPayCycle',
'astute_pay_cycle_id' => 'getAstutePayCycleId',
'pay_interval' => 'getPayInterval',
'profit' => 'getProfit',
'charge_rate' => 'getChargeRate',
'total_pay_rate' => 'getTotalPayRate',
'on_costs_percentage' => 'getOnCostsPercentage',
'on_costs_number' => 'getOnCostsNumber',
'other_invoice_recipients' => 'getOtherInvoiceRecipients',
'internal_note' => 'getInternalNote',
'invoice_description' => 'getInvoiceDescription'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const ACCOUNTING_SYSTEM_VINCERE_INVOICE = 'VINCERE_INVOICE';
const ACCOUNTING_SYSTEM_XERO = 'XERO';
const ACCOUNTING_SYSTEM_ASTUTE = 'ASTUTE';
const ACCOUNTING_SYSTEM_OTHER = 'OTHER';
const PAY_METHOD_BANK_TRANSFER = 'BANK_TRANSFER';
const PAY_METHOD_CHEQUE = 'CHEQUE';
const PAY_METHOD_CREDIT_CARD = 'CREDIT_CARD';
const PAY_METHOD_GIRO_ACH = 'GIRO_ACH';
const PAY_METHOD_OTHER = 'OTHER';
const PAY_CYCLE_WEEKLY = 'WEEKLY';
const PAY_CYCLE_BI_WEEKLY = 'BI_WEEKLY';
const PAY_CYCLE_SEMI_MONTHLY = 'SEMI_MONTHLY';
const PAY_CYCLE_FOUR_WEEKLY = 'FOUR_WEEKLY';
const PAY_CYCLE_MONTHLY = 'MONTHLY';
const PAY_CYCLE_TIMESHEET = 'TIMESHEET';
const PAY_CYCLE_PROJECT_COMPLETION = 'PROJECT_COMPLETION';
const PAY_CYCLE_CUSTOM = 'CUSTOM';
const PAY_INTERVAL_HOURLY = 'HOURLY';
const PAY_INTERVAL_DAILY = 'DAILY';
const PAY_INTERVAL_WEEKLY = 'WEEKLY';
const PAY_INTERVAL_MONTHLY = 'MONTHLY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountingSystemAllowableValues()
    {
        return [
            self::ACCOUNTING_SYSTEM_VINCERE_INVOICE,
self::ACCOUNTING_SYSTEM_XERO,
self::ACCOUNTING_SYSTEM_ASTUTE,
self::ACCOUNTING_SYSTEM_OTHER,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayMethodAllowableValues()
    {
        return [
            self::PAY_METHOD_BANK_TRANSFER,
self::PAY_METHOD_CHEQUE,
self::PAY_METHOD_CREDIT_CARD,
self::PAY_METHOD_GIRO_ACH,
self::PAY_METHOD_OTHER,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayCycleAllowableValues()
    {
        return [
            self::PAY_CYCLE_WEEKLY,
self::PAY_CYCLE_BI_WEEKLY,
self::PAY_CYCLE_SEMI_MONTHLY,
self::PAY_CYCLE_FOUR_WEEKLY,
self::PAY_CYCLE_MONTHLY,
self::PAY_CYCLE_TIMESHEET,
self::PAY_CYCLE_PROJECT_COMPLETION,
self::PAY_CYCLE_CUSTOM,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayIntervalAllowableValues()
    {
        return [
            self::PAY_INTERVAL_HOURLY,
self::PAY_INTERVAL_DAILY,
self::PAY_INTERVAL_WEEKLY,
self::PAY_INTERVAL_MONTHLY,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accounting_system'] = isset($data['accounting_system']) ? $data['accounting_system'] : null;
        $this->container['pay_method'] = isset($data['pay_method']) ? $data['pay_method'] : null;
        $this->container['consolidation_method'] = isset($data['consolidation_method']) ? $data['consolidation_method'] : null;
        $this->container['consolidation_code'] = isset($data['consolidation_code']) ? $data['consolidation_code'] : null;
        $this->container['offer_date'] = isset($data['offer_date']) ? $data['offer_date'] : null;
        $this->container['placement_date'] = isset($data['placement_date']) ? $data['placement_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['terms_days'] = isset($data['terms_days']) ? $data['terms_days'] : null;
        $this->container['invoice_due_date'] = isset($data['invoice_due_date']) ? $data['invoice_due_date'] : null;
        $this->container['net_total'] = isset($data['net_total']) ? $data['net_total'] : null;
        $this->container['use_profit_for_net_total'] = isset($data['use_profit_for_net_total']) ? $data['use_profit_for_net_total'] : null;
        $this->container['other_invoice_items_total'] = isset($data['other_invoice_items_total']) ? $data['other_invoice_items_total'] : null;
        $this->container['invoice_total'] = isset($data['invoice_total']) ? $data['invoice_total'] : null;
        $this->container['invoice_no'] = isset($data['invoice_no']) ? $data['invoice_no'] : null;
        $this->container['invoice_name'] = isset($data['invoice_name']) ? $data['invoice_name'] : null;
        $this->container['invoice_code'] = isset($data['invoice_code']) ? $data['invoice_code'] : null;
        $this->container['sale_tax_gst_vat'] = isset($data['sale_tax_gst_vat']) ? $data['sale_tax_gst_vat'] : null;
        $this->container['total_pay_calculation'] = isset($data['total_pay_calculation']) ? $data['total_pay_calculation'] : null;
        $this->container['pay_cycle'] = isset($data['pay_cycle']) ? $data['pay_cycle'] : null;
        $this->container['astute_pay_cycle_id'] = isset($data['astute_pay_cycle_id']) ? $data['astute_pay_cycle_id'] : null;
        $this->container['pay_interval'] = isset($data['pay_interval']) ? $data['pay_interval'] : null;
        $this->container['profit'] = isset($data['profit']) ? $data['profit'] : null;
        $this->container['charge_rate'] = isset($data['charge_rate']) ? $data['charge_rate'] : null;
        $this->container['total_pay_rate'] = isset($data['total_pay_rate']) ? $data['total_pay_rate'] : null;
        $this->container['on_costs_percentage'] = isset($data['on_costs_percentage']) ? $data['on_costs_percentage'] : null;
        $this->container['on_costs_number'] = isset($data['on_costs_number']) ? $data['on_costs_number'] : null;
        $this->container['other_invoice_recipients'] = isset($data['other_invoice_recipients']) ? $data['other_invoice_recipients'] : null;
        $this->container['internal_note'] = isset($data['internal_note']) ? $data['internal_note'] : null;
        $this->container['invoice_description'] = isset($data['invoice_description']) ? $data['invoice_description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccountingSystemAllowableValues();
        if (!is_null($this->container['accounting_system']) && !in_array($this->container['accounting_system'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'accounting_system', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPayMethodAllowableValues();
        if (!is_null($this->container['pay_method']) && !in_array($this->container['pay_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pay_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPayCycleAllowableValues();
        if (!is_null($this->container['pay_cycle']) && !in_array($this->container['pay_cycle'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pay_cycle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPayIntervalAllowableValues();
        if (!is_null($this->container['pay_interval']) && !in_array($this->container['pay_interval'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pay_interval', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets accounting_system
     *
     * @return string
     */
    public function getAccountingSystem()
    {
        return $this->container['accounting_system'];
    }

    /**
     * Sets accounting_system
     *
     * @param string $accounting_system this is Export data to accounting system must tobe one in enums
     *
     * @return $this
     */
    public function setAccountingSystem($accounting_system)
    {
        $allowedValues = $this->getAccountingSystemAllowableValues();
        if (!is_null($accounting_system) && !in_array($accounting_system, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accounting_system', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accounting_system'] = $accounting_system;

        return $this;
    }

    /**
     * Gets pay_method
     *
     * @return string
     */
    public function getPayMethod()
    {
        return $this->container['pay_method'];
    }

    /**
     * Sets pay_method
     *
     * @param string $pay_method Payment method must to be one in enums
     *
     * @return $this
     */
    public function setPayMethod($pay_method)
    {
        $allowedValues = $this->getPayMethodAllowableValues();
        if (!is_null($pay_method) && !in_array($pay_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pay_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pay_method'] = $pay_method;

        return $this;
    }

    /**
     * Gets consolidation_method
     *
     * @return string
     */
    public function getConsolidationMethod()
    {
        return $this->container['consolidation_method'];
    }

    /**
     * Sets consolidation_method
     *
     * @param string $consolidation_method consolidation_method
     *
     * @return $this
     */
    public function setConsolidationMethod($consolidation_method)
    {
        $this->container['consolidation_method'] = $consolidation_method;

        return $this;
    }

    /**
     * Gets consolidation_code
     *
     * @return string
     */
    public function getConsolidationCode()
    {
        return $this->container['consolidation_code'];
    }

    /**
     * Sets consolidation_code
     *
     * @param string $consolidation_code consolidation_code
     *
     * @return $this
     */
    public function setConsolidationCode($consolidation_code)
    {
        $this->container['consolidation_code'] = $consolidation_code;

        return $this;
    }

    /**
     * Gets offer_date
     *
     * @return string
     */
    public function getOfferDate()
    {
        return $this->container['offer_date'];
    }

    /**
     * Sets offer_date
     *
     * @param string $offer_date Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setOfferDate($offer_date)
    {
        $this->container['offer_date'] = $offer_date;

        return $this;
    }

    /**
     * Gets placement_date
     *
     * @return string
     */
    public function getPlacementDate()
    {
        return $this->container['placement_date'];
    }

    /**
     * Sets placement_date
     *
     * @param string $placement_date Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setPlacementDate($placement_date)
    {
        $this->container['placement_date'] = $placement_date;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param string $invoice_date Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets terms_days
     *
     * @return float
     */
    public function getTermsDays()
    {
        return $this->container['terms_days'];
    }

    /**
     * Sets terms_days
     *
     * @param float $terms_days terms_days
     *
     * @return $this
     */
    public function setTermsDays($terms_days)
    {
        $this->container['terms_days'] = $terms_days;

        return $this;
    }

    /**
     * Gets invoice_due_date
     *
     * @return string
     */
    public function getInvoiceDueDate()
    {
        return $this->container['invoice_due_date'];
    }

    /**
     * Sets invoice_due_date
     *
     * @param string $invoice_due_date Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setInvoiceDueDate($invoice_due_date)
    {
        $this->container['invoice_due_date'] = $invoice_due_date;

        return $this;
    }

    /**
     * Gets net_total
     *
     * @return float
     */
    public function getNetTotal()
    {
        return $this->container['net_total'];
    }

    /**
     * Sets net_total
     *
     * @param float $net_total net_total
     *
     * @return $this
     */
    public function setNetTotal($net_total)
    {
        $this->container['net_total'] = $net_total;

        return $this;
    }

    /**
     * Gets use_profit_for_net_total
     *
     * @return bool
     */
    public function getUseProfitForNetTotal()
    {
        return $this->container['use_profit_for_net_total'];
    }

    /**
     * Sets use_profit_for_net_total
     *
     * @param bool $use_profit_for_net_total use_profit_for_net_total
     *
     * @return $this
     */
    public function setUseProfitForNetTotal($use_profit_for_net_total)
    {
        $this->container['use_profit_for_net_total'] = $use_profit_for_net_total;

        return $this;
    }

    /**
     * Gets other_invoice_items_total
     *
     * @return float
     */
    public function getOtherInvoiceItemsTotal()
    {
        return $this->container['other_invoice_items_total'];
    }

    /**
     * Sets other_invoice_items_total
     *
     * @param float $other_invoice_items_total other_invoice_items_total
     *
     * @return $this
     */
    public function setOtherInvoiceItemsTotal($other_invoice_items_total)
    {
        $this->container['other_invoice_items_total'] = $other_invoice_items_total;

        return $this;
    }

    /**
     * Gets invoice_total
     *
     * @return float
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoice_total'];
    }

    /**
     * Sets invoice_total
     *
     * @param float $invoice_total invoice_total
     *
     * @return $this
     */
    public function setInvoiceTotal($invoice_total)
    {
        $this->container['invoice_total'] = $invoice_total;

        return $this;
    }

    /**
     * Gets invoice_no
     *
     * @return string
     */
    public function getInvoiceNo()
    {
        return $this->container['invoice_no'];
    }

    /**
     * Sets invoice_no
     *
     * @param string $invoice_no invoice_no
     *
     * @return $this
     */
    public function setInvoiceNo($invoice_no)
    {
        $this->container['invoice_no'] = $invoice_no;

        return $this;
    }

    /**
     * Gets invoice_name
     *
     * @return string
     */
    public function getInvoiceName()
    {
        return $this->container['invoice_name'];
    }

    /**
     * Sets invoice_name
     *
     * @param string $invoice_name invoice_name
     *
     * @return $this
     */
    public function setInvoiceName($invoice_name)
    {
        $this->container['invoice_name'] = $invoice_name;

        return $this;
    }

    /**
     * Gets invoice_code
     *
     * @return string
     */
    public function getInvoiceCode()
    {
        return $this->container['invoice_code'];
    }

    /**
     * Sets invoice_code
     *
     * @param string $invoice_code invoice_code
     *
     * @return $this
     */
    public function setInvoiceCode($invoice_code)
    {
        $this->container['invoice_code'] = $invoice_code;

        return $this;
    }

    /**
     * Gets sale_tax_gst_vat
     *
     * @return float
     */
    public function getSaleTaxGstVat()
    {
        return $this->container['sale_tax_gst_vat'];
    }

    /**
     * Sets sale_tax_gst_vat
     *
     * @param float $sale_tax_gst_vat sale_tax_gst_vat
     *
     * @return $this
     */
    public function setSaleTaxGstVat($sale_tax_gst_vat)
    {
        $this->container['sale_tax_gst_vat'] = $sale_tax_gst_vat;

        return $this;
    }

    /**
     * Gets total_pay_calculation
     *
     * @return string
     */
    public function getTotalPayCalculation()
    {
        return $this->container['total_pay_calculation'];
    }

    /**
     * Sets total_pay_calculation
     *
     * @param string $total_pay_calculation select pay type
     *
     * @return $this
     */
    public function setTotalPayCalculation($total_pay_calculation)
    {
        $this->container['total_pay_calculation'] = $total_pay_calculation;

        return $this;
    }

    /**
     * Gets pay_cycle
     *
     * @return string
     */
    public function getPayCycle()
    {
        return $this->container['pay_cycle'];
    }

    /**
     * Sets pay_cycle
     *
     * @param string $pay_cycle pay period
     *
     * @return $this
     */
    public function setPayCycle($pay_cycle)
    {
        $allowedValues = $this->getPayCycleAllowableValues();
        if (!is_null($pay_cycle) && !in_array($pay_cycle, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pay_cycle', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pay_cycle'] = $pay_cycle;

        return $this;
    }

    /**
     * Gets astute_pay_cycle_id
     *
     * @return float
     */
    public function getAstutePayCycleId()
    {
        return $this->container['astute_pay_cycle_id'];
    }

    /**
     * Sets astute_pay_cycle_id
     *
     * @param float $astute_pay_cycle_id astute rate only on time managerment Astute Payroll
     *
     * @return $this
     */
    public function setAstutePayCycleId($astute_pay_cycle_id)
    {
        $this->container['astute_pay_cycle_id'] = $astute_pay_cycle_id;

        return $this;
    }

    /**
     * Gets pay_interval
     *
     * @return string
     */
    public function getPayInterval()
    {
        return $this->container['pay_interval'];
    }

    /**
     * Sets pay_interval
     *
     * @param string $pay_interval this is pay interval, HOURLY, WEEEKLY, MONTHY,...
     *
     * @return $this
     */
    public function setPayInterval($pay_interval)
    {
        $allowedValues = $this->getPayIntervalAllowableValues();
        if (!is_null($pay_interval) && !in_array($pay_interval, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pay_interval', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pay_interval'] = $pay_interval;

        return $this;
    }

    /**
     * Gets profit
     *
     * @return float
     */
    public function getProfit()
    {
        return $this->container['profit'];
    }

    /**
     * Sets profit
     *
     * @param float $profit total number of profit pay
     *
     * @return $this
     */
    public function setProfit($profit)
    {
        $this->container['profit'] = $profit;

        return $this;
    }

    /**
     * Gets charge_rate
     *
     * @return float
     */
    public function getChargeRate()
    {
        return $this->container['charge_rate'];
    }

    /**
     * Sets charge_rate
     *
     * @param float $charge_rate pay rate with include tax and allowances
     *
     * @return $this
     */
    public function setChargeRate($charge_rate)
    {
        $this->container['charge_rate'] = $charge_rate;

        return $this;
    }

    /**
     * Gets total_pay_rate
     *
     * @return float
     */
    public function getTotalPayRate()
    {
        return $this->container['total_pay_rate'];
    }

    /**
     * Sets total_pay_rate
     *
     * @param float $total_pay_rate pay rate with include tax and allowances
     *
     * @return $this
     */
    public function setTotalPayRate($total_pay_rate)
    {
        $this->container['total_pay_rate'] = $total_pay_rate;

        return $this;
    }

    /**
     * Gets on_costs_percentage
     *
     * @return float
     */
    public function getOnCostsPercentage()
    {
        return $this->container['on_costs_percentage'];
    }

    /**
     * Sets on_costs_percentage
     *
     * @param float $on_costs_percentage cost number in percentage
     *
     * @return $this
     */
    public function setOnCostsPercentage($on_costs_percentage)
    {
        $this->container['on_costs_percentage'] = $on_costs_percentage;

        return $this;
    }

    /**
     * Gets on_costs_number
     *
     * @return float
     */
    public function getOnCostsNumber()
    {
        return $this->container['on_costs_number'];
    }

    /**
     * Sets on_costs_number
     *
     * @param float $on_costs_number cost number
     *
     * @return $this
     */
    public function setOnCostsNumber($on_costs_number)
    {
        $this->container['on_costs_number'] = $on_costs_number;

        return $this;
    }

    /**
     * Gets other_invoice_recipients
     *
     * @return string
     */
    public function getOtherInvoiceRecipients()
    {
        return $this->container['other_invoice_recipients'];
    }

    /**
     * Sets other_invoice_recipients
     *
     * @param string $other_invoice_recipients this is return list of email recipients
     *
     * @return $this
     */
    public function setOtherInvoiceRecipients($other_invoice_recipients)
    {
        $this->container['other_invoice_recipients'] = $other_invoice_recipients;

        return $this;
    }

    /**
     * Gets internal_note
     *
     * @return string
     */
    public function getInternalNote()
    {
        return $this->container['internal_note'];
    }

    /**
     * Sets internal_note
     *
     * @param string $internal_note Note
     *
     * @return $this
     */
    public function setInternalNote($internal_note)
    {
        $this->container['internal_note'] = $internal_note;

        return $this;
    }

    /**
     * Gets invoice_description
     *
     * @return string
     */
    public function getInvoiceDescription()
    {
        return $this->container['invoice_description'];
    }

    /**
     * Sets invoice_description
     *
     * @param string $invoice_description Note
     *
     * @return $this
     */
    public function setInvoiceDescription($invoice_description)
    {
        $this->container['invoice_description'] = $invoice_description;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}