<div class="collapse" id="makesalary">
  <div class="well">
      <form action="changesalary" method="POST" @submit.prevent="revise_salary"  role="form">
      {{ method_field('PATCH') }}
      {{ csrf_field() }}
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
                  <td class="input-group"><input  class="revise_salary" type="number" :value=student.salary v-if="students.length !== 0"><span class="input-group-addon">￥/h</span></td>
              </tr>
            </tbody>

          </table>
          <p style="text-align: right;"><button class="btn btn-primary" onclick="alert('希望大家都涨工资')">修改时薪</button></p>
      </form>
  </div>
</div>