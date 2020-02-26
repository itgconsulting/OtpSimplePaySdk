<?php
/**
 * Copyright ©2019 Itegration Ltd., Inc. All rights reserved.
 * See COPYING.txt for license details.
 * @author: Perencz Tamás <tamas.perencz@itegraion.com>
 */

// @codingStandardsIgnoreFile

namespace Itegration\OtpSymplePaySdk;

/**
 * Class SimplePayCardQuery
 * @package Itegration\OtpSymplePaySdk
 */
class SimplePayCardQuery extends Base
{
    protected $currentInterface = 'cardquery';
    protected $returnArray      = [];
    public    $transactionBase  = [
        'salt'     => '',
        'cardId'   => '',
        'history'  => false,
        'merchant' => '',
    ];

    /**
     * Constructor for cardquery
     *
     * @return void
     */
    public function __construct()
    {
        $this->apiInterface['cardquery'] = '/v2/cardquery';

        parent::__construct();
    }

    /**
     * Run CardQuery
     *
     * @return array $result API response
     */
    public function runCardQuery()
    {
        return $this->execApiCall();
    }
}
