<?php

return array (
  '7842206cffcdc109a5b5e94031a5db84' => 
  array (
    'query' => 'SELECT created,checkindate FROM reservation {where}',
    'bind' => 
    array (
    ),
  ),
  '49ba1ee2a3688e4cd1df54cb7b51b613' => 
  array (
    'query' => 'SELECT * FROM reservation WHERE property = :property and noshow = :noshow or noshow = :noshow0 ',
    'bind' => 
    array (
      'property' => '662ptb4a86dw49t7',
      'noshow' => 1,
      'noshow0' => 2,
    ),
  ),
  '82d5acd86ac2937a58a0b45269d15470' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkedout = :checkedout ',
    'bind' => 
    array (
      'propertyid' => '',
      'checkedout' => '',
    ),
  ),
  '4d7ad677a65b37e8b88c1b198f3631e8' => 
  array (
    'query' => 'SELECT * FROM property WHERE propertyid = :propertyid ',
    'bind' => 
    array (
      'propertyid' => '662ptb4a86dw49t7',
    ),
  ),
  'd559107a04ecfb5b6e0856021cc34b9a' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout = :checkout ',
    'bind' => 
    array (
      'propertyid' => '662ptb4a86dw49t7',
      'checkout' => 1626303600,
    ),
  ),
  '624fc929a932b986745a8421ebf61b7e' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout < :checkout ',
    'bind' => 
    array (
      'propertyid' => '662ptb4a86dw49t7',
      'checkout' => 1626352291,
    ),
  ),
  '6f3de1f0dc836ec2375b976dbd2ec49d' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property ',
    'bind' => 
    array (
      'property' => '662ptb4a86dw49t7',
    ),
  ),
  'ea6535da483bddf3cf1da331f5efbec8' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property and created != :created ',
    'bind' => 
    array (
      'property' => '662ptb4a86dw49t7',
      'created' => 0,
    ),
  ),
  'e20e24df6e7dcadae76fcae24dd4f456' => 
  array (
    'query' => 'SELECT * FROM room WHERE propertyid = :propertyid and status = :status ',
    'bind' => 
    array (
      'propertyid' => '662ptb4a86dw49t7',
      'status' => 1,
    ),
  ),
  '5912239515368841ed57e2149ac53355' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid AND checkedout = :checkedout ',
    'bind' => 
    array (
      'propertyid' => '662ptb4a86dw49t7',
      'checkedout' => 0,
    ),
  ),
);
