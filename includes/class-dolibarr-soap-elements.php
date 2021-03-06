<?php
/* Copyright (C) 2015 Raphaël Doursenaud <rdoursenaud@gpcsolutions.fr>
 * Copyright (C) 2015 Maxime Lafourcade <rdoursenaud@gpcsolutions.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * SOAP reprentations hinting classes
 */

/**
 * Class DolibarrOrder
 *
 * SOAP orders representation
 */
class DolibarrOrder {
	/** @var int */
	public $thirdparty_id;
	/** @var string ISO 8601 */
	public $date;
	/** @var int */
	public $status;
	/** @var DolibarrOrderLine[] */
	public $lines;
}

/**
 * Class DolibarrOrderLine
 *
 * SOAP order lines representation
 */
class DolibarrOrderLine {
	/** @var int */
	public $type;

	/** @var boolean */
	public $desc;

	/** @var int */
	public $product_id;

	/** @var float|int */
	public $vat_rate;

	/** @var int */
	public $qty;

	/** @var float|int */
	public $price;

	/** @var float|int */
	public $unitprice;

	/** @var float|int */
	public $total_net;

	/** @var float|int */
	public $total;

	/** @var float|int */
	public $total_vat;
}

/**
 * Class DolibarrThirdparty
 *
 * SOAP third parties representation
 */
class DolibarrThirdparty {
	/** @var string */
	public $ref;

	/** @var string */
	public $status;

	/** @var string */
	public $client;

	/** @var string */
	public $supplier;

	/** @var string */
	public $address;

	/** @var string */
	public $zip;

	/** @var string */
	public $town;

	/** @var string */
	public $country_code;

	/** @var string */
	public $supplier_code;

	/** @var string */
	public $phone;

	/** @var string */
	public $email;

	/** @var int */
	public $individual;

	/** @var string */
	public $firstname;
}
