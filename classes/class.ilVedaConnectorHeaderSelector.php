<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */

use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;

/**
 * Custom header selector, to add authentication token header
 */
class ilVedaConnectorHeaderSelector extends HeaderSelector
{

	private $config = null;

	private $settings = null;

	/**
	 * ilVedaConnectorHeaderSelector constructor.
	 * @param \Swagger\Client\Configuration $config
	 */
	public function __construct(Configuration $config)
	{
		$this->config = $config;
		$this->settings = ilVedaConnectorSettings::getInstance();
	}

	/**
	 * @param string[] $accept
	 * @param string[] $contentTypes
	 * @return array
	 */
	public function selectHeaders($accept, $contentTypes)
	{
		$headers = parent::selectHeaders($accept, $contentTypes);
		$headers[\ilVedaConnectorSettings::HEADER_TOKEN] = $this->config->getAccessToken();
		if ($this->settings->isAddHeaderAuthEnabled()) {
		    $headers[$this->settings->getAddHeaderName()] = $this->settings->getAddHeaderValue();
        }
		return $headers;
	}


}