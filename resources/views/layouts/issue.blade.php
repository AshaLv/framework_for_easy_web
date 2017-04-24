<div class="collapse" id="showmessages">
  <div class="well">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th>用户</th>
                  <th>标题</th>
                  <th>正文</th>
                  <th>删除</th>
              </tr>  
            </thead>

            <tbody>
              <tr v-for="message in messages" >
                  <td>@{{message.user.name}}</td>
                  <td>@{{message.title}}小时</td>
                  <td>@{{message.content}}</td>
                   <td>
                      <form action="/issue/delete" method="post">
                        {{csrf_field()}}
                        <input type="text" name="id" style="display: none" v-bind:value="message.id">
                        <button class="btn btn-primary" type="submit">删除</button>
                      </form>
                    </td>
              </tr>
            </tbody>

          </table>
  
  </div>
</div>