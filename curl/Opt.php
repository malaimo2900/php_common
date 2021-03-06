<?php

namespace common\curl;

use \common\obj\Config as objectConfig;


define('common\curl\OPT_FILTER', 'CurlOptionFilter');

class Opt extends objectConfig {
    const FILTER_ISCONFIG = 1;          // use \common\obj\Config and store array from call to \common\obj\Config::getArrayCopy()
    const FILTER_ISRESOURCESTREAM = 2;
    
	protected $cName, $value;
	
	protected $config = array(
		CURLOPT_AUTOREFERER => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_BINARYTRANSFER => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_COOKIESESSION => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_CERTINFO => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_CONNECT_ONLY => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_CRLF => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_DNS_USE_GLOBAL_CACHE => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_FAILONERROR => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_FILETIME => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_FOLLOWLOCATION => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_FORBID_REUSE => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_FRESH_CONNECT => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_FTP_USE_EPRT => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_FTP_USE_EPSV => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_FTP_CREATE_MISSING_DIRS => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_FTPAPPEND => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_TCP_NODELAY => array(FILTER_VALIDATE_BOOLEAN),
		//CURLOPT_FTPASCII => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_FTPLISTONLY => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_HEADER => array(FILTER_VALIDATE_BOOLEAN),
		CURLINFO_HEADER_OUT => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_HTTPGET => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_HTTPPROXYTUNNEL => array(FILTER_VALIDATE_BOOLEAN),
		//CURLOPT_MUTE => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_NETRC => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_NOBODY => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_NOPROGRESS => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_NOSIGNAL => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_POST => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_PUT => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_RETURNTRANSFER => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_SSL_VERIFYPEER => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_TRANSFERTEXT => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_UNRESTRICTED_AUTH => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_UPLOAD => array(FILTER_VALIDATE_BOOLEAN),
		CURLOPT_VERBOSE => array(FILTER_VALIDATE_BOOLEAN),


		CURLOPT_BUFFERSIZE => array(FILTER_VALIDATE_INT),
		//CURLOPT_CLOSEPOLICY => array(FILTER_VALIDATE_INT),
		CURLOPT_CONNECTTIMEOUT => array(FILTER_VALIDATE_INT),
		CURLOPT_CONNECTTIMEOUT_MS => array(FILTER_VALIDATE_INT),
		CURLOPT_DNS_CACHE_TIMEOUT => array(FILTER_VALIDATE_INT),
		CURLOPT_FTPSSLAUTH => array(FILTER_VALIDATE_INT),
		CURLOPT_HTTP_VERSION => array(FILTER_VALIDATE_INT),
		CURLOPT_HTTPAUTH => array(FILTER_VALIDATE_INT),
		CURLOPT_INFILESIZE => array(FILTER_VALIDATE_INT),
		CURLOPT_LOW_SPEED_LIMIT => array(FILTER_VALIDATE_INT),
		CURLOPT_LOW_SPEED_TIME => array(FILTER_VALIDATE_INT),
		CURLOPT_MAXCONNECTS => array(FILTER_VALIDATE_INT),
		CURLOPT_MAXREDIRS => array(FILTER_VALIDATE_INT),
		CURLOPT_PORT => array(FILTER_VALIDATE_INT),
		CURLOPT_PROTOCOLS => array(FILTER_VALIDATE_INT),
		CURLOPT_PROXYAUTH => array(FILTER_VALIDATE_INT),
		CURLOPT_PROXYPORT => array(FILTER_VALIDATE_INT),
		CURLOPT_PROXYTYPE => array(FILTER_VALIDATE_INT),
		CURLOPT_REDIR_PROTOCOLS => array(FILTER_VALIDATE_INT),
		CURLOPT_RESUME_FROM => array(FILTER_VALIDATE_INT),
		CURLOPT_SSL_VERIFYHOST => array(FILTER_VALIDATE_INT),
		CURLOPT_SSLVERSION => array(FILTER_VALIDATE_INT),
		CURLOPT_TIMECONDITION => array(FILTER_VALIDATE_INT),
		CURLOPT_TIMEOUT => array(FILTER_VALIDATE_INT),
		CURLOPT_TIMEOUT_MS => array(FILTER_VALIDATE_INT),
		CURLOPT_TIMEVALUE => array(FILTER_VALIDATE_INT),
		CURLOPT_MAX_RECV_SPEED_LARGE => array(FILTER_VALIDATE_INT),
		CURLOPT_MAX_SEND_SPEED_LARGE => array(FILTER_VALIDATE_INT),
		CURLOPT_SSH_AUTH_TYPES => array(FILTER_VALIDATE_INT),
		CURLOPT_IPRESOLVE => array(FILTER_VALIDATE_INT),


		// replace some of these with the FILTER_VALIDATE_REGEXP
		CURLOPT_CAINFO => array(FILTER_SANITIZE_STRING),
		CURLOPT_CAPATH => array(FILTER_SANITIZE_STRING),
		CURLOPT_COOKIE => array(FILTER_SANITIZE_STRING),
		CURLOPT_COOKIEFILE => array(FILTER_SANITIZE_STRING),
		CURLOPT_COOKIEJAR => array(FILTER_SANITIZE_STRING),
		CURLOPT_CUSTOMREQUEST => array(FILTER_SANITIZE_STRING),
		CURLOPT_EGDSOCKET => array(FILTER_SANITIZE_STRING),
		CURLOPT_ENCODING => array(FILTER_SANITIZE_STRING),
		CURLOPT_FTPPORT => array(FILTER_SANITIZE_STRING),
		CURLOPT_INTERFACE => array(FILTER_SANITIZE_STRING),
		CURLOPT_KEYPASSWD => array(FILTER_SANITIZE_STRING),
		CURLOPT_KRB4LEVEL => array(FILTER_SANITIZE_STRING),
	    CURLOPT_POSTFIELDS => array(\common\curl\OPT_FILTER, self::FILTER_ISCONFIG),
		CURLOPT_PROXY => array(FILTER_SANITIZE_STRING),
		CURLOPT_PROXYUSERPWD => array(FILTER_SANITIZE_STRING),
		CURLOPT_RANDOM_FILE => array(FILTER_SANITIZE_STRING),
		CURLOPT_RANGE => array(FILTER_SANITIZE_STRING),
		CURLOPT_REFERER => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSH_HOST_PUBLIC_KEY_MD5 => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSH_PUBLIC_KEYFILE => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSH_PRIVATE_KEYFILE => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSL_CIPHER_LIST => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSLCERT => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSLCERTPASSWD => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSLCERTTYPE => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSLENGINE => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSLENGINE_DEFAULT => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSLKEY => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSLKEYPASSWD => array(FILTER_SANITIZE_STRING),
		CURLOPT_SSLKEYTYPE => array(FILTER_SANITIZE_STRING),
		CURLOPT_URL => array(FILTER_SANITIZE_STRING),
		CURLOPT_USERAGENT => array(FILTER_SANITIZE_STRING),
		CURLOPT_USERPWD => array(FILTER_SANITIZE_STRING),

		// not sure what to do with the arrays yet.
		CURLOPT_HTTP200ALIASES => array(),
		CURLOPT_HTTPHEADER => array(),
		CURLOPT_POSTQUOTE => array(),
		CURLOPT_QUOTE => array(),
		
		
		CURLOPT_FILE => array(\common\curl\OPT_FILTER, self::FILTER_ISRESOURCESTREAM),
	    CURLOPT_INFILE => array(\common\curl\OPT_FILTER, self::FILTER_ISRESOURCESTREAM),
	    CURLOPT_STDERR => array(\common\curl\OPT_FILTER, self::FILTER_ISRESOURCESTREAM),
	    CURLOPT_WRITEHEADER => array(\common\curl\OPT_FILTER, self::FILTER_ISRESOURCESTREAM),
		

		CURLOPT_HEADERFUNCTION => array(),
		//CURLOPT_PASSWDFUNCTION => array(),
		CURLOPT_PROGRESSFUNCTION => array(),
		CURLOPT_READFUNCTION => array(),
		CURLOPT_WRITEFUNCTION => array(),
		
		
		CURLOPT_SHARE => array()
	);
	
	
	/**
	 * 
	 * @param string $offset cName or value
	 * @param mixed $value a correct value for cName or value based upon configName or configValue
	 * @throws \UnexpectedValueException when @param $value is invalild
	 * @throws \RuntimeException if property cannot be set 
	 */
	public function offsetSet($offset, $value) {
		if ($offset === 'cName') {
			if (isset($this->config[$value])) {
				$this->cName = $value;
			} else {
				throw new \UnexpectedValueException('Invalid value, '.var_export($value, TRUE).', for offset '.$offset);
			}
		} else if ($offset === 'value' && isset($this->config[$this->cName])) {
			if ($this->config[$this->cName][0] === \common\curl\OPT_FILTER && isset($this->config[$this->cName][1])) {
				switch($this->config[$this->cName][1]) {
				    case self::FILTER_ISRESOURCESTREAM:
						$this->value = \common\filters\IsResourceStream::validate($value);
						break;
				    case self::FILTER_ISCONFIG:
				        if ($value instanceOf objectConfig) {
				            $this->value = $value->getArrayCopy();
				        }
				        break;
				}
				if ($this->value === FALSE) {
					throw new \UnexpectedValueException('Invalid value, '.var_export($value, TRUE).', for offset '.$offset.' and cName: '.$this->cName);
				}
			} else if (!($this->value = filter_var($value, $this->config[$this->cName][0], (isset($this->config[$this->cName][1]) && is_array($this->config[$this->cName][1]) ? $this->config[$this->cName][1] : array())))) {
				throw new \UnexpectedValueException('Invalid value, '.var_export($value, TRUE).', for offset '.$offset.' and cName: '.$this->cName);
			}
		} else {
			throw new \RuntimeException($offset.' does not exist for '.__CLASS__.' or cName has not yet been set for config option');
		}
	}
}
