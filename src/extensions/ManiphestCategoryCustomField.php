<?php

final class ManiphestCategoryCustomField extends ManiphestCustomField {

  public function getFieldKey() {
    return 'rivigo:custom-category';
  }

  public function getFieldName() {
    return 'Rivigo Category';
  }

  public function shouldAppearInPropertyView() {
    return true;
  }
//
//  public function shouldAppearInEditEngine() {
//    return true;
//  }

  public function renderPropertyViewLabel() {
    return pht('Category');
  }

  public function renderPropertyViewValue(array $handles) {
    return phutil_tag(
      'h1',
      array(
        'style' => 'color: #ff00ff',
      ),
      pht('It worked!'));
  }

}
