<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * 状態定義
     */
    const STATUS = [
        1 => [ 'label' => '非常に高い', 'class' => 'label-danger' ],
        2 => [ 'label' => '高い', 'class' => 'label-warning' ],
        3 => [ 'label' => '普通', 'class' => 'label-success' ],
        4 => [ 'label' => '低い', 'class' => 'label-info' ],
        5 => [ 'label' => '非常に低い', 'class' => 'label-default' ],
    ];

    /**
     * 状態のラベル
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        // 状態値
        $status = $this->attributes['status'];

        // 定義されていなければ空文字を返す
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['label'];
    }

    /**
     * 状態を表すHTMLクラス
     * @return string
     */
    public function getStatusClassAttribute()
    {
        // 状態値
        $status = $this->attributes['status'];

        // 定義されていなければ空文字を返す
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['class'];
    }

    /**
     * 整形した期限日
     * @return string
     */
    public function getFormattedDueDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['due_date'])
            ->format('Y/m/d');
    }
}
