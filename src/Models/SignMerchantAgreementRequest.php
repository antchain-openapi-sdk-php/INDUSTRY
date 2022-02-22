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

    // 来源场景码, 由中台为业务方分配
    /**
     * @var string
     */
    public $source;

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

    // 签约请求单据号
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authToken'           => 'auth_token',
        'source'              => 'source',
        'merchantUserId'      => 'merchant_user_id',
        'personalProductCode' => 'personal_product_code',
        'requestId'           => 'request_id',
    ];

    public function validate()
    {
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('merchantUserId', $this->merchantUserId, true);
        Model::validateRequired('personalProductCode', $this->personalProductCode, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->merchantUserId) {
            $res['merchant_user_id'] = $this->merchantUserId;
        }
        if (null !== $this->personalProductCode) {
            $res['personal_product_code'] = $this->personalProductCode;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
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
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['merchant_user_id'])) {
            $model->merchantUserId = $map['merchant_user_id'];
        }
        if (isset($map['personal_product_code'])) {
            $model->personalProductCode = $map['personal_product_code'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }

        return $model;
    }
}
