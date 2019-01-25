<?php
/**
 * Created by PhpStorm.
 * User: nts
 * Date: 31.3.18.
 * Time: 15.37
 */

namespace KgBot\Builders;


use KgBot\Models\CustomerGroup;

class CustomerGroupBuilder extends Builder
{
    protected $entity = 'customer-groups';
    protected $model  = CustomerGroup::class;
}