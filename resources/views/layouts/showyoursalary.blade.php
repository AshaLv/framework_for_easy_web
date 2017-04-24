<div class="collapse" id="showyoursalary">
  <div class="well">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th>名字</th>
                  <th>工作小时数(h)</th>
                  <th>时薪(￥/h)</th>  
                  <th>工资额(￥)</th>
                  <th>发工资日期</th>
              </tr>  
            </thead>

            <tbody>
              <tr v-for="salary in salaries" >
                  <td>@{{salary.user.name}}</td>
                  <td>@{{salary.time}}小时</td>
                  <td>@{{salary.user.salary}}￥</td>
                  <td>@{{salary.salary}}￥</td>
                  <td>@{{salary.date}}</td>
              </tr>
            </tbody>

          </table>
  
  </div>
</div>