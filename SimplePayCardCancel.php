<?php
/**
 * Copyright ©2019 Itegration Ltd., Inc. All rights reserved.
 * See COPYING.txt for license details.
 * @author: Perencz Tamás <tamas.perencz@itegraion.com>
 */

// @codingStandardsIgnoreFile

namespace Itegration\OtpSymplePaySdk;

/**
 * Class SimplePayCardCancel
 * @package Itegration\OtpSymplePaySdk
 */
class SimplePayCardCancel extends Base
{
    protected $currentInterface = 'cardcancel';
    protected $returnArray      = [];
    public    $transactionBase  = [
        'salt'     => '',
        'cardId'   => '',
        'merchant' => '',
    ];

    /**
     * Constructor for cardcancel
     *
     * @return void
     */
    public function __construct()
    {
        $this->apiInterface['cardcancel'] = '/v2/cardcancel';

        parent::__construct();
    }

    /**
     * Run CardCancel
     *
     * @return array $result API response
     */
    public function runCardCancel()
    {
        return $this->execApiCall();
    }
}
