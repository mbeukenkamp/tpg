CREATE TABLE h_rounds (
  id int(11) NOT NULL auto_increment,
  artist varchar(100) NOT NULL,
  title varchar(100) NOT NULL,
  PRIMARY KEY (id)
);
INSERT INTO  `tpg`.`h_rounds` (
`id` ,
`id_game` ,
`id_role` ,
`id_round` ,
`id_product` ,
`receiving_delay` ,
`shipping_delay` ,
`in_stock` ,
`backlog` ,
`ordered`
)
VALUES (
'9',  '3',  '1',  '1',  '1',  '4',  '4',  '12',  '0',  '0'
);
