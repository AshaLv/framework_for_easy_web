<div class="collapse" id="givesalary">
  <div class="well">
		<form class="form-horizontal" role="form" method="POST" action="/salary" >
			{{method_field('PATCH')}}
		    {{ csrf_field() }}

		    <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
		        <label for="id" class="col-md-4 control-label">学生姓名</label>

		        <div class="col-md-6">
		            <select name="id" id="id" @click="get_students_name">
		            	<option  v-if="students.length>0" v-for="(student,index) in students"  :value="student.id" @click="get_student_index(index)">@{{student.name}}</option>
		            </select>

		            @if ($errors->has('id'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('id') }}</strong>
		                </span>
		            @endif
		        </div>
		    </div>

		    <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
		        <label for="date" class="col-md-4 control-label">发放日期</label>

		        <div class="col-md-6">
		            <input type="date" name="date" class="form-control">

		            @if ($errors->has('date'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('date') }}</strong>
		                </span>
		            @endif
		        </div>
		    </div>

		    <div class="form-group{{ $errors->has('worktime') ? ' has-error' : '' }}">
		        <label for="worktime" class="col-md-4 control-label">实际工时</label>

		        <div class="col-md-6">
		            
		            <div class="input-group">
		            	<input id="worktime" type="text" class="form-control" id="worktime" required @change="show_salary($event)" name="worktime">
		            	<span class="input-group-addon">小时</span>
		        	</div>

		            @if ($errors->has('worktime'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('worktime') }}</strong>
		                </span>
		            @endif
		        </div>
		    </div>


		    <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
		        <label for="salary" class="col-md-4 control-label">应发工资</label>

		        <div class="col-md-6">
					<div class="input-group">
		            	<input id="salary" type="text" class="form-control" id="salary" :value="salary_number" required name="salary">
		            	<span class="input-group-addon">￥</span>
		        	</div>

		            @if ($errors->has('salary'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('salary') }}</strong>
		                </span>
		            @endif
		        </div>
		    </div>

		    <div class="form-group">
		        <div class="col-md-3 col-md-offset-9">
					<button class="btn btn-primary" onclick="alert('大家已经收到工资单了哦')">确认</button>
		        </div>
		    </div>

		</form>
  </div>
</div>