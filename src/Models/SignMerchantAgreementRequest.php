<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\INDUSTRY\Models;

use AlibabaCloud\Tea\Model;

class SignMerchantAgreementRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    // 签约请求单据号
    /**
     * @var string
     */
    public $requestId;

    // 来源场景码, 由中台为业务方分配
    /**
     * @var string
     */
    public $source;

    // 渠道
    /**
     * @var string
     */
    public $channel;

    // 商家pid
    /**
     * @var string
     */
    public $merchantUserId;

    // 个人签约产品码，商户代扣场景固定GENERAL_WITHHOLDING_P
    /**
     * @var string
     */
    public $personalProductCode;
    protected $_name = [
        'authToken'           => 'auth_token',
        'requestId'           => 'request_id',
        'source'              => 'source',
        'channel'             => 'channel',
        'merchantUserId'      => 'merchant_user_id',
        'personalProductCode' => 'personal_product_code',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('merchantUserId', $this->merchantUserId, true);
        Model::validateRequired('personalProductCode', $this->personalProductCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->merchantUserId) {
            $res['merchant_user_id'] = $this->merchantUserId;
        }
        if (null !== $this->personalProductCode) {
            $res['personal_product_code'] = $this->personalProductCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SignMerchantAgreementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['merchant_user_id'])) {
            $model->merchantUserId = $map['merchant_user_id'];
        }
        if (isset($map['personal_product_code'])) {
            $model->personalProductCode = $map['personal_product_code'];
        }

        return $model;
    }
}
