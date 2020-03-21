<?php
/**
 * This Software is the property of RESPONSE GmbH and is protected
 * by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 * http://www.response-gmbh.de
 *
 * @copyright (C) RESPONSE GmbH
 * @author RESPONSE GmbH <response@response-gmbh.de>
 * @link http://www.response-gmbh.de
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id' 		  => 'resUps',
    'title' 	  => [
    		'de' => '<img src="../modules/response/resUps/out/img/response_logo_modul.png"> RESPONSE GmbH UPS',
    		'en' => '<img src="../modules/response/resUps/out/img/response_logo_modul.png"> RESPONSE GmbH UPS'
    ],
    'description' => [
    		'de' => 'Importiert den Tracking-Code und erstellt das Versandlabel für UPS. Zusätzlich wird im Bestellvorgang eine Checkbox zur Einwilligung der Weitergabe der Telefonnummer angezeigt.',
    		'en' => 'Imports the tracking code and creates the shipping label for UPS. In addition, a checkbox is displayed in the ordering process to agree to the transfer of the telephone number.',
    ],
    'thumbnail'   => 'out/img/resmodule.png',
    'version' 	  => '1.0.0',
    'author' 	  => 'RESPONSE GmbH',
	'email'       => 'response@response-gmbh.de',
	'url'         => 'http://www.response-gmbh.de',
    'extend' => [
    	\OxidEsales\Eshop\Application\Controller\Admin\DeliverySetMain::class  => RESPONSEGmbH\resUps\Application\Controller\Admin\resUpsDeliverySetMain::class,
    	\OxidEsales\Eshop\Application\Controller\Admin\OrderMain::class 	   => RESPONSEGmbH\resUps\Application\Controller\Admin\resUpsOrderMain::class,
    	\OxidEsales\Eshop\Application\Model\User\UserUpdatableFields::class    => RESPONSEGmbH\resUps\Application\Model\User\resUpsUserUpdatableFields::class,
    	\OxidEsales\Eshop\Application\Model\Order::class    				   => RESPONSEGmbH\resUps\Application\Model\resUpsOrder::class,
    ],
    'templates' => [
    	'resUps_order_ups.tpl'	=> 'response/resUps/Application/views/admin/tpl/resUps_order_ups.tpl'
    ],
    'blocks' => [
     	['template' => 'order_main.tpl',
     		  'block'    => 'admin_order_main_form',
     		  'file'     => '/Application/views/blocks/resUps_admin_order_main_form.tpl'],
     	['template' => 'deliveryset_main.tpl',
     		  'block'    => 'admin_deliveryset_main_form',
     		  'file'     => '/Application/views/blocks/resUps_admin_deliveryset_main_form.tpl'],
     	['template' => 'form/fieldset/user_account.tpl',
     		  'block'    => 'user_account_newsletter',
     		  'file'     => '/Application/views/blocks/resUps_user_account_newsletter.tpl'],
     	['template' => 'form/fieldset/user_noaccount.tpl',
     		  'block'    => 'user_noaccount_newsletter',
     		  'file'     => '/Application/views/blocks/resUps_user_account_newsletter.tpl'],
     	['template' => 'form/user_checkout_change.tpl',
     		  'block'    => 'user_checkout_shipping_form',
     		  'file'     => '/Application/views/blocks/resUps_user_account_newsletter.tpl'],
    ],
	'settings' => [
		[
			'group' => 'resUpsSoap',
			'name' => 'sResUpsSoapAccessKey',
			'type' => 'str',
			'value' => '',
			'position' => 1
		],
		[
			'group' => 'resUpsSoap',
			'name' => 'sResUpsSoapUserId',
			'type' => 'str',
			'value' => '',
			'position' => 1
		],
		[
			'group' => 'resUpsSoap',
			'name' => 'sResUpsSoapPassword',
			'type' => 'str',
			'value' => '',
			'position' => 1
		],
		[
			'group' => 'resUpsSoap',
			'name' => 'blResUpsSoapTest',
			'type' => 'bool',
			'value' => 'true',
			'position' => 1
		],
		[
			'group' => 'resUpsSoap',
			'name' => 'sResUpsSoapReference',
			'type' => 'str',
			'value' => '',
			'position' => 1
		],
		[
			'group' => 'resUpsSoap',
			'name' => 'blResUpsSoapDebug',
			'type' => 'bool',
			'value' => 'false',
			'position' => 1
		],
		[
			'group' => 'resUpsShopAddress',
			'name' => 'sResUpsShopAddressCountryCode',
			'type' => 'str',
			'value' => 'DE',
			'position' => 1
		],
	],
	'events' => [
		'onActivate' => '\RESPONSEGmbH\resUps\Core\resUpsEvents::onActivate'
	]
];
