<?php

namespace AutoCheck;

/**
 * Class GetLink
 * @package AutoCheck
 */
class GetLink
{

    /**
     * @var Account
     */
    protected $account;
    /**
     * @var string
     */
    protected $postUrl = 'https://www.autocheck.com/DealerWebLink.jsp';

    /**
     * @param Account $account
     */
    public function __construct(Account $account)
    {
        $this->account = $account;
    }

    /**
     * @param $vin
     * @return mixed
     */
    public function requestLinkForVin($vin)
    {
        $data = [
            'VIN' => $vin,
            'CID' => $this->account->getCustomerId(),
            'PWD' => $this->account->getPassword(),
            'SID' => $this->account->getSecondaryCustomerId(),
            'LANG' => $this->account->getLanguage(),
        ];
        return $this->sendPost($data);
    }

    /**
     * @param $data
     * @return mixed
     */
    private function sendPost($data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, $this->postUrl);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->generateUrlEncodedQueryString($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    /**
     * @param $data
     * @return string
     */
    private function generateUrlEncodedQueryString($data)
    {
        $this->guardAgainstInvalidInputForUrl($data);
        return http_build_query($data);
    }

    /**
     * @param $data
     */
    private function guardAgainstInvalidInputForUrl($data)
    {
        if (!is_array($data))
            throw new \InvalidArgumentException;
    }
}
