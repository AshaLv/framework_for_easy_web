<div class="collapse" id="givemessage">
  <div class="well">
      <form action="/givemessage" method="POST"  role="form" class="form-horizontal">
      {{ method_field('PATCH') }}
      {{ csrf_field() }}

<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
  <label for="title" class="col-md-4 control-label">标题</label>

  <div class="col-md-6">
  <input type="text" name="title" class="form-control">

  @if ($errors->has('title'))
      <span class="help-block">
          <strong>{{ $errors->first('title') }}</strong>
      </span>
  @endif
  </div>
</div>

<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
  <label for="content" class="col-md-4 control-label">工资单哪里出错了</label>

  <div class="col-md-6">
  <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>

  @if ($errors->has('content'))
      <span class="help-block">
          <strong>{{ $errors->first('content') }}</strong>
      </span>
  @endif
  </div>
</div>

          <p style="text-align: right;"><button class="btn btn-primary" onclick="alert('已经发送到管理员那了')">发送</button></p>
      </form>
  </div>
</div>