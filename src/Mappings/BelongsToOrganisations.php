<?php

namespace LaravelDoctrine\ACL\Mappings;

use Attribute;
use Illuminate\Contracts\Config\Repository;

#[Attribute(Attribute::TARGET_PROPERTY)]
final class BelongsToOrganisations extends RelationAnnotation
{
    /**
     * @var string
     */
    public $inversedBy = 'users';

    /**
     * @param Repository $config
     *
     * @return mixed
     */
    public function getTargetEntity(Repository $config)
    {
        return $this->targetEntity ?: $config->get('acl.organisations.entity', 'Organisation');
    }
}
