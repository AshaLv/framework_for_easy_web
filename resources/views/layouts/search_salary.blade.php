<div class="collapse" id="search_salary">
  <div class="well">
      <form action="search_salary" method="get" @submit.prevent="search_salary"  role="form">

      <div class="input-group">
        <input type="search" name="search" id="search" class="form-control" placeholder="请输入人的名字">
        <span class="input-group-btn"><button class="btn btn-primary">搜索</button></span>
      </div>
      </form>
          <table class="table table-hover">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>名字</th>
                  <th>时薪</th>  
              </tr>  
            </thead>

            <tbody>
              <tr v-for="student in students" >
                  <td><input type="text" :value=student.id v-if="students.length !== 0" disabled="" class="idcard"></td>
                  <td><input type="text" :value=student.name v-if="students.length !== 0" disabled=""></td>
                  <td class="input-group"><input  class="revise_salary" type="number" :value=student.salary v-if="students.length !== 0" disabled=""><span class="input-group-addon">￥/h</span></td>
              </tr>
            </tbody>

          </table>
      
  </div>
</div>