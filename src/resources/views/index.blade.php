@extends('layouts.app')


@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection


@section('content')


    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--name">
              <label class="form__input--firstname"><input type="text" name="first-name" placeholder=" 姓：山田" value="{{ old('first-name') }}" />
              <label class="form__input--lastname"><input type="text" name="last-name" placeholder=" 名：太郎" value="{{ old('last-name') }}" />
            </div>
            <div class="form__error">
                @error('first-name')
                 {{ $message }}
                @enderror
                @error('last-name')
                 {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別
            </span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <label class="form__input--radio-item"><input type="radio" name="gender" value="1"/>男性</label>
              <label class="form__input--radio-item"><input type="radio" name="gender" value="2"/>女性</label>
              <label class="form__input--radio-item"><input type="radio" name="gender" value="3"/>その他</label>
            </div>

            <div class="form__error">

            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
                @error('email')
                 {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--tell">
              <label class="form__input--tell-item"><input type="tel" name="tell" placeholder="090" />
            </div>
            
            <div class="form__error">
                @error('tell')
                 {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
                @error('address')
                 {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例：千駄々谷マンション101" />
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <select class="form__input--text-select" name="category_id" placeholder="選択してください" value="{{ old('category') }}">
                 <option value=""></option>
              </select>
            </div>
            <div class="form__error">

            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"value="{{ old('detail') }}" ></textarea>
            </div>
            <div class="form__error">
                @error('detail')
                 {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
    </div>
    

    
@endsection
