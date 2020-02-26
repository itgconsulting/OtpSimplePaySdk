<?php
/**
 * Copyright ©2019 Itegration Ltd., Inc. All rights reserved.
 * See COPYING.txt for license details.
 * @author: Perencz Tamás <tamas.perencz@itegraion.com>
 */

// @codingStandardsIgnoreFile

namespace Itegration\OtpSymplePaySdk;

/**
 * Class SimplePayDoRecurring
 * @package Itegration\OtpSymplePaySdk
 */
class SimplePayDoRecurring extends Base
{
    protected $currentInterface = 'dorecurring';

    /**
     * Constructor for dorecurring
     *
     * @return void
     */
    public function __construct()
    {
        $this->apiInterface['dorecurring'] = '/v2/dorecurring';

        parent::__construct();
    }

    /**
     * Run Dorecurring
     *
     * @return array $result API response
     */
    public function runDorecurring()
    {
        return $this->execApiCall();
    }
}
