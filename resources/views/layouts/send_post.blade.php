<div class="collapse" id="sendpost">
  <div class="well">
      <form action="/sendpost" method="POST"  role="form" class="form-horizontal">
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
  <label for="content" class="col-md-4 control-label">公告正文</label>

  <div class="col-md-6">
  <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>

  @if ($errors->has('content'))
      <span class="help-block">
          <strong>{{ $errors->first('content') }}</strong>
      </span>
  @endif
  </div>
</div>

          <p style="text-align: right;"><button class="btn btn-primary" onclick="alert('已经发送')">发送</button></p>
      </form>
  </div>
</div>