<?php

namespace CleverAge\EAVManager\AkeneoProductBundle\Attribute\Type;

/**
 * Attribute types dictionary
 *
 * @author    Willy Mesnage <willy.mesnage@akeneo.com>
 * @copyright 2015 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
final class AkeneoAttributeTypes
{
    const BOOLEAN = 'pim_catalog_boolean';
    const DATE = 'pim_catalog_date';
    const FILE = 'pim_catalog_file';
    const IDENTIFIER = 'pim_catalog_identifier';
    const IMAGE = 'pim_catalog_image';
    const METRIC = 'pim_catalog_metric';
    const NUMBER = 'pim_catalog_number';
    const OPTION_MULTI_SELECT = 'pim_catalog_multiselect';
    const OPTION_SIMPLE_SELECT = 'pim_catalog_simpleselect';
    const PRICE_COLLECTION = 'pim_catalog_price_collection';
    const TEXTAREA = 'pim_catalog_textarea';
    const TEXT = 'pim_catalog_text';
    const REFERENCE_DATA_MULTI_SELECT = 'pim_reference_data_multiselect';
    const REFERENCE_DATA_SIMPLE_SELECT = 'pim_reference_data_simpleselect';
    const ASSETS_COLLECTION = 'pim_assets_collection';
}
