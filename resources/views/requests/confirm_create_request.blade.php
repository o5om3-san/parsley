<link rel="stylesheet" href="css/style.css">
@extends('layouts.app')

@section('content')

<div class="row1">
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        <h2>以下の内容で、注文を確定しますか？</h2>
        
        <table class="table table-bordered">
             <tr>
                <th>商品名：</th><td>{{ $item->name }} × {{ $amount }}個</td>
             </tr>
             <tr>
                <th>商品代金：</th> <td>￥{{ $item->price * $amount }}</td>
             </tr>    
             <tr>
                <th>支払い合計<br>(手数料10％込み)：</th> <td>￥{{ ceil($item->price * $amount *1.1)  }}</td>
             </tr>
             <tr>
                <th>コメント</th><td>{{ $comment }}</td>
             </tr>
        </table>
            <h4>LINEに通知が来たら、受け渡し場所に行ってください。</h4>
        <div class=confirm-button>
            <tr>
            
                <div class='btn btn-m btn-default'  type="button" onclick="history.back()">
                    戻る
                </div>
                {!! Form::open( ['route' => ['requests.store', $otsukai->id]]) !!}
                {!! Form::hidden('item',$item_id, ['class' => 'form-control']) !!}
                {!! Form::hidden('amount', $amount, ['class' => 'form-control']) !!}
                {!! Form::hidden('comment',$comment, ['size' => '50x2']) !!}
                {!! Form::submit('注文確定', ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
            </tr>
        </div>
        </div>
    </div>
</div>
@endsection