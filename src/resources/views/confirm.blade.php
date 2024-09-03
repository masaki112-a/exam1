@extends('layouts.app')


@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection


@section('content')


    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>confirm</h2>
      </div>
      <form class="form" action="/thanks" method="post">
        <div class="confirm-table" >
          <table class="confirm-table__inner" border="1">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="name" value="{{ $contact['first-name'] }}" readonly  />
                <input type="text" name="name" value="{{ $contact['last-name'] }}" readonly  />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <?php
                $value = $contact['gender'] ;
                if ($value = 1) {
                echo 男性;
              }
              ?>
              <td class="confirm-table__text">
              

              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text-tel">
                <label class="confirm-table__text-tel-item"><input type="tel" name="tel" value="{{ $contact['tell'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
              </td>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['building'] }}" readonly />
              </td>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="content" value="{{ $contact['category'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="content" value="{{ $contact['detail'] }}" readonly  />
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
          <button class="form__button-fix"  href="/">修正</button>
        </div>

      </form>
    </div>

@endsection