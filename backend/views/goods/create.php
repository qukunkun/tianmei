<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Goods */

$this->title = 'Create Goods';
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="goods-create">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

<!--    <div class="goods-form">-->
<!---->
<!--        <form id="category" action="/tianmei/backend/web/goods/create" method="post">-->
<!--            <div class="form-group">-->
<!--                <label class="control-label">类别ID</label>-->
<!--                <select id="category" class="form-control selectpicker">-->
<!---->
<!--                    <option value="">请选择</option>-->
<!--                    <option value="">Ketchup</option>-->
<!--                    <option value="">Relish</option>-->
<!---->
<!--                </select>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label class="control-label">商品代码</label>-->
<!--                <input type="text" id="goods-goods_code" class="form-control" name="Goods[goods_code]" maxlength="255">-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label class="control-label">商品名称</label>-->
<!--                <input type="text" id="goods-goods_name" class="form-control" name="Goods[goods_name]" maxlength="255">-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label class="control-label">商品数量</label>-->
<!--                <input type="text" id="goods-goods_number" class="form-control" name="Goods[goods_number]">-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <button type="submit" class="btn btn-success">Save</button>-->
<!--            </div>-->
<!---->
<!--        </form>-->
<!--    </div>-->

    <div class="form-group">
        <label class="font-noraml">基本示例</label>
        <div class="input-group">
            <select data-placeholder="选择省份..." class="chosen-select" style="width:350px;" tabindex="1">
                <option value="">请选择省份</option>
                <option value="110000" hassubinfo="true">北京</option>
                <option value="120000" hassubinfo="true">天津</option>
                <option value="130000" hassubinfo="true">河北省</option>
                <option value="140000" hassubinfo="true">山西省</option>
                <option value="150000" hassubinfo="true">内蒙古自治区</option>
                <option value="210000" hassubinfo="true">辽宁省</option>
                <option value="220000" hassubinfo="true">吉林省</option>
                <option value="230000" hassubinfo="true">黑龙江省</option>
                <option value="310000" hassubinfo="true">上海</option>
                <option value="320000" hassubinfo="true">江苏省</option>
                <option value="330000" hassubinfo="true">浙江省</option>
                <option value="340000" hassubinfo="true">安徽省</option>
                <option value="350000" hassubinfo="true">福建省</option>
                <option value="360000" hassubinfo="true">江西省</option>
                <option value="370000" hassubinfo="true">山东省</option>
                <option value="410000" hassubinfo="true">河南省</option>
                <option value="420000" hassubinfo="true">湖北省</option>
                <option value="430000" hassubinfo="true">湖南省</option>
                <option value="440000" hassubinfo="true">广东省</option>
                <option value="450000" hassubinfo="true">广西壮族自治区</option>
                <option value="460000" hassubinfo="true">海南省</option>
                <option value="500000" hassubinfo="true">重庆</option>
                <option value="510000" hassubinfo="true">四川省</option>
                <option value="520000" hassubinfo="true">贵州省</option>
                <option value="530000" hassubinfo="true">云南省</option>
                <option value="540000" hassubinfo="true">西藏自治区</option>
                <option value="610000" hassubinfo="true">陕西省</option>
                <option value="620000" hassubinfo="true">甘肃省</option>
                <option value="630000" hassubinfo="true">青海省</option>
                <option value="640000" hassubinfo="true">宁夏回族自治区</option>
                <option value="650000" hassubinfo="true">新疆维吾尔自治区</option>
                <option value="710000" hassubinfo="true">台湾省</option>
                <option value="810000" hassubinfo="true">香港特别行政区</option>
                <option value="820000" hassubinfo="true">澳门特别行政区</option>
                <option value="990000" hassubinfo="true">海外</option>
            </select>
        </div>
    </div>

    <h2><a name="multiple-select" class="anchor" href="#multiple-select">Multiple Select</a></h2>
    <div class="side-by-side clearfix">
        <div>
            <em>Turns This</em>
            <select data-placeholder="Choose a Country..." class="chosen-select" multiple tabindex="2">
                <option value=""></option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Aland Islands">Aland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D&apos;ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curacao">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
            </select>
        </div>
        <div>
</div>

<?=Html::jsFile('@web/assets/9fc4e263/jquery.js')?>