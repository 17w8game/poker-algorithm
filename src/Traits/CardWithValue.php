<?php
namespace Goodspb\PokerAlgorithm\Traits;

/**
 * 牌当中出现值，且规则如下
 * 1-10 对应的值为 10
 * JQK 也对应为 10
 *
 * @package Goodspb\PokerAlgorithm\Traits
 * @method getCardNumber($card)
 */
trait CardWithValue
{
    /**
     * 获取数值
     * @param $card
     * @return mixed
     */
    protected function getCardValue($card)
    {
        $cardNumber = $this->getCardNumber($card);
        return $cardNumber < 10 ? $cardNumber : 10;
    }

    /**
     * 获取所有牌的数值
     * @param $cards
     * @return array
     */
    protected function getCardValues($cards)
    {
        $values = [];
        foreach ($cards as $card) {
            $values[] = $this->getCardValue($card);
        }
        return $values;
    }

    /**
     * 卡牌求和
     * @param $cards
     * @return int
     */
    protected function cardsSum($cards)
    {
        return array_sum($this->getCardValues($cards));
    }
}
