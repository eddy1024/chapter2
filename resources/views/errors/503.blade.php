{{-- 親ビューの指定 --}}
@extends('layout')

{{-- 以降の@sectionから@endsectionまでの間が各セクションの内容となる --}}

@section('title')
サービスが利用できません
@endsection

@section('content')
<div class="pure-u-1">
  <h1>サービスが利用できません。(503)</h1>
  <p>一時的にアクセスが増大したか、サービスの運営に支障が生じています。</p>
  <p>もうしばらくお待ちになり、後ほど再度お試しください。</p>
</div>
<div class="pure-u-1">
  {{-- トップページへ戻る --}}
  <a class="pure-button" href="{!! url('/') !!}">トップページへ戻る</a>
</div>
@endsection
