@@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection @section('content')
<div class="todo__alert">
  @if (session('message'))
  <div class="todo__alert--success">{{ session('message') }}</div>
  @endif @if ($errors->any())
  <div class="todo__alert--danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
</div>

<div class="admin__content">
<div class="admin__heading">
   <h2>Admin</h2>
</div>
  <form class="search-form" action="/todos" method="post">
    @csrf
    <div class="search-form__item">
      <input class="search-form__item-input" type="text" />名前やメールアドレスを入力してください
      <select class="search-form__item-select">
        <option value="">性別</option>
      </select>
      <select class="create-form__item-select" name="category_id">
        @foreach ($categories as $category)
          <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
        @endforeach
      </select>
      <select class="search-form__item-select">
        <option value="">年/月/日</option>
      </select>
    </div>
    <div class="search-form__button">
     <button class="search-form__button-submit" type="submit">検索</button>
    </div>
    <button class="search-form__button-reset"type="reset">リセット</button>
  </form>

  <div class="admin-table">
    <table class="admin-table__inner">
      <tr class="admin-table__row">
       <th class="admin-table__header">お名前</th>
       <th class="admin-table__header">性別</th>
       <th class="admin-table__header">メールアドレス</th>
       <th class="admin-table__header">お問い合わせの種類</th>
       <th class="admin-table__header"></th>
      </tr>
      @foreach ($contacts as $contact)
      <tr class="admin-table__row-result">
        <td class="admin-table__item">{{$contact->first-name}}{{$contact->last-name}}<</td>
        <td class="admin-table__item">{{$contact->gender}}<</td>
        <td class="admin-table__item">{{$contact->email}}<</td>
        <td class="admin-table__item">{{$contact->category}}<</td>
        <td class="admin-table__item">
          <button class="update-form__button-submit" type="submit">
              詳細
          </button>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection



@endsection
