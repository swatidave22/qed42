<?php

/**
 * Extend the defaults.
 */
class CityMetadataController extends EntityDefaultMetadataController {
  public function entityPropertyInfo() {
    $info = parent::entityPropertyInfo();
    $properties = &$info[$this->type]['properties'];
    $properties['citie_id'] = array(
      'label' => t('city id'),
      'schema field' => 'citie_id',
      'getter callback' => 'entity_property_getter_method',
      'setter callback' => 'entity_property_verbatim_set',
      'required' => TRUE,
      'description' => t('city uniqid.'),
    );
    $properties['city_name'] = array(
      'label' => t('city name'),
      'schema field' => 'city_name',
      'getter callback' => 'entity_property_getter_method',
      'setter callback' => 'entity_property_verbatim_set',
      'required' => TRUE,
      'description' => t('city name.'),
    );
    $properties['loc'] = array(
      'label' => t('city loc'),
      'schema field' => 'loc',
      'getter callback' => 'entity_property_getter_method',
      'setter callback' => 'entity_property_verbatim_set',
      'required' => TRUE,
      'description' => t('location detail.'),
    );        
     $properties['pop'] = array(
      'type' => 'text',
      'label' => t('pop'),
      'description' => t('pincode no.'),
      'setter callback' => 'entity_property_verbatim_set',
      'getter callback' => 'entity_property_getter_method',
      'options list' => 'mymodule_type_options_list',
      'required' => TRUE,
      'schema field' => 'type',
    );  
      $properties['state'] = array(
      'type' => 'text',
      'label' => t('state'),
      'description' => t('The state name.'),
      'setter callback' => 'entity_property_verbatim_set',
      'getter callback' => 'entity_property_getter_method',
      'options list' => 'mymodule_type_options_list',
      'required' => TRUE,
      'schema field' => 'type',
    );     
    return $info;
  }
}