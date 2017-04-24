<div class="collapse" id="check_post">
  <div class="well">

<div>
<table class="table table-striped">
<thead>
  <tr>
    <th>标题</th>
    <th>内容</th>
  </tr>
</thead>

<tbody>
  <tr  v-for="post in posts">
    <td>@{{post.title}}</td>
    <td>@{{post.content}}</td>
  </tr>
</tbody>
  
</table>
</div>
  

  </div>
</div>