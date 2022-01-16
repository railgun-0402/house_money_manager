@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header mb-3">以下に使用した費用を入力してください。</div>
                    <div class="col-md-12 order-md-1">
                        <form method="post" action="">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="date" class="font-weight-bold">日付</label>
                                    <input name="date" id="date" class="date-picker form-control" placeholder="yyyy-mm-dd" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="price" class="font-weight-bold">金額</label>
                                    <input type="text" id="price" maxlength="8" class="form-control" placeholder="8400" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="breakdown" class="font-weight-bold">用途</label>
                                    <textarea class="form-control" id="breakdown" name="breakdown" rows="3" maxlength="50" placeholder="用途"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="memo" class="font-weight-bold">備考</label>
                                    <textarea class="form-control" id="memo" name="memo" rows="3" placeholder="備考"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col text-center">
                                    <input type="button" id="confirm" class="btn btn-primary mx-4" style="width:60%; line-height:40px;" value="確認" onclick="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection