<?php

return array (
  '7842206cffcdc109a5b5e94031a5db84' => 
  array (
    'query' => 'SELECT created,checkindate FROM reservation {where}',
    'bind' => 
    array (
    ),
  ),
  'a61bb58f5331157e77e973aff1ff8117' => 
  array (
    'query' => 'SELECT * FROM reservation WHERE property = :property and noshow = :noshow or noshow = :noshow0 ',
    'bind' => 
    array (
      'property' => 'vh765n1hm2r8wyeo',
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
  '2fca02ab17737766c481fe2e683fa1f5' => 
  array (
    'query' => 'SELECT * FROM property WHERE propertyid = :propertyid ',
    'bind' => 
    array (
      'propertyid' => 'vh765n1hm2r8wyeo',
    ),
  ),
  '9b415f31887cc1a4ff61674da9843fe7' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout = :checkout ',
    'bind' => 
    array (
      'propertyid' => 'vh765n1hm2r8wyeo',
      'checkout' => 1627945200,
    ),
  ),
  '3275a8cce5621c24c9058d108b0979cb' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout < :checkout ',
    'bind' => 
    array (
      'propertyid' => 'vh765n1hm2r8wyeo',
      'checkout' => 1627971765,
    ),
  ),
  'dfa52bd6aad5a1eb076f065644b742b4' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property ',
    'bind' => 
    array (
      'property' => 'vh765n1hm2r8wyeo',
    ),
  ),
  'e0b0b0ea044886651ec9db52b7106cbe' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property and created != :created ',
    'bind' => 
    array (
      'property' => 'vh765n1hm2r8wyeo',
      'created' => 0,
    ),
  ),
  '353fbb55421d439b4cd7e1d89838ea64' => 
  array (
    'query' => 'SELECT * FROM room WHERE propertyid = :propertyid and status = :status ',
    'bind' => 
    array (
      'propertyid' => 'vh765n1hm2r8wyeo',
      'status' => 1,
    ),
  ),
);
