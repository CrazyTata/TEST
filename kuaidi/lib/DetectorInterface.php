<?php

namespace lib;
use Waybill;
use kuaidi;

interface DetectorInterface
{
    /**
     * 识别快递公司
     *
     * @param Waybill $waybill
     *
     * @return array
     */
    public function detect(Waybill $waybill);
}
