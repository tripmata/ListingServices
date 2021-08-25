<?php

return array (
  '7842206cffcdc109a5b5e94031a5db84' => 
  array (
    'query' => 'SELECT created,checkindate FROM reservation {where}',
    'bind' => 
    array (
    ),
  ),
  '6313638ca20fc9e21520309d14fe5366' => 
  array (
    'query' => 'SELECT * FROM reservation WHERE property = :property and noshow = :noshow or noshow = :noshow0 and checkindate >= :checkindate and checkindate <= :checkindate1 ',
    'bind' => 
    array (
      'property' => '7pn398ik87w6t3v9',
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
  '65c26d351fc13a437e7b3ce26471ae25' => 
  array (
    'query' => 'SELECT * FROM property WHERE propertyid = :propertyid ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
    ),
  ),
  '88026cea0cc6412e2efd79b2f898f36b' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout = :checkout and checkedout = :checkedout ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
      'checkout' => 1629759600,
      'checkedout' => 0,
    ),
  ),
  'f0e7a8f078caba2479a77b5893b2ced0' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout < :checkout and checkedout = :checkedout ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
      'checkout' => 1629804196,
      'checkedout' => 0,
    ),
  ),
  'a05a3c90a32e7850c693ffd0884e2f08' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property ',
    'bind' => 
    array (
      'property' => '7pn398ik87w6t3v9',
    ),
  ),
  '2f5564348ef47bc33c675ed7bcdea3f9' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property and created != :created and created >= :created2 and created <= :created3 ',
    'bind' => 
    array (
      'property' => '7pn398ik87w6t3v9',
      'created' => 0,
      'created2' => 1627772400,
      'created3' => 1630364400,
    ),
  ),
  '5e9f69c057558ca5d20497e3821c01f8' => 
  array (
    'query' => 'SELECT * FROM room WHERE propertyid = :propertyid and status = :status ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
      'status' => 1,
    ),
  ),
  '2f4c2053a92b9c380d34588f8c85eb16' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid AND checkedout = :checkedout ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
      'checkedout' => 0,
    ),
  ),
);
