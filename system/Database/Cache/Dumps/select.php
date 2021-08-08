<?php

return array (
  '7842206cffcdc109a5b5e94031a5db84' => 
  array (
    'query' => 'SELECT created,checkindate FROM reservation {where}',
    'bind' => 
    array (
    ),
  ),
  '1cfcfec861d6ab90085f3df87647d690' => 
  array (
    'query' => 'SELECT * FROM reservation WHERE property = :property and noshow = :noshow or noshow = :noshow0 and checkindate >= :checkindate and checkindate <= :checkindate1 ',
    'bind' => 
    array (
      'property' => '662ptb4a86dw49t7',
      'noshow' => 1,
      'noshow0' => 2,
      'checkindate' => 1627772400,
      'checkindate1' => 1630364400,
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
  '63e74037a9ec65820b4198af31b8c5f7' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout = :checkout ',
    'bind' => 
    array (
      'propertyid' => '662ptb4a86dw49t7',
      'checkout' => 1628290800,
    ),
  ),
  'c137dea89be33c88501ea58ced572188' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout < :checkout and checkedout = :checkedout ',
    'bind' => 
    array (
      'propertyid' => '662ptb4a86dw49t7',
      'checkout' => 1628348784,
      'checkedout' => 0,
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
  '05c6640c47c8b8fdf851bc3460533ebf' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property and created != :created and created >= :created2 and created <= :created3 ',
    'bind' => 
    array (
      'property' => '662ptb4a86dw49t7',
      'created' => 0,
      'created2' => 1627772400,
      'created3' => 1630364400,
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
