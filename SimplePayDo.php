<?php
/**
 * Copyright ©2019 Itegration Ltd., Inc. All rights reserved.
 * See COPYING.txt for license details.
 * @author: Perencz Tamás <tamas.perencz@itegraion.com>
 */

namespace Itegration\OtpSimplePaySdk;

// @codingStandardsIgnoreFile

/**
 * Class SimplePayDo
 * @package Itegration\OtpSimplePaySdk
 */
class SimplePayDo extends Base
{
    protected $currentInterface = 'do';
    protected $returnArray      = [];
    public    $transactionBase  = [
        'salt'          => '',
        'orderRef'      => '',
        'customerEmail' => '',
        'merchant'      => '',
        'currency'      => '',
        'customer'      => '',
    ];

    /**
     * Constructor for do
     *
     * @return void
     */
    public function __construct()
    {
        $this->apiInterface['do'] = '/v2/do';

        parent::__construct();
    }

    /**
     * Run Do
     *
     * @return array $result API response
     */
    public function runDo()
    {
        return $this->execApiCall();
    }
}
