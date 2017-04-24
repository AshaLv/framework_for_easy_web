
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



new Vue({
    el: '#app',
    data:{
    	students:[],
    	salary_number:0,
    	index:0,
        salaries:[],
        messages:[],
        posts:[]
    },
    methods:{
    	get_students_name(){
            axios.get('/users', {
            params: {
              
            }
            })
            .then(response => this.students = response.data)
            .catch(function (error) {
            console.log(error);
            });
    	},
    	get_student_index(index){
    		this.index = index;
    	},
    	show_salary(event){
    		var time = event.target.value;
    		this.salary_number = (this.students[this.index].salary) * time;
    	},
    	revise_salary(){
    		var salary_length = $('tbody tr').length;
    		var salaries = [];
            var salary_id = [];
    		for(var i=0;i<salary_length;i++){
    			salary_id.push($(' tbody tr .revise_salary').eq(i).val());
                salary_id.push($(' tbody tr .idcard').eq(i).val());
                salaries = salary_id.splice(0,2);
                axios.patch('/changesalary', {
                params: {
                    idCard:salaries[1],
                    salary:salaries[0]
                }
                })
                .then(response =>  console.log(response.data))
                .catch(function (error) {
                console.log(error);
                });
    		}
    	},
        show_your_salary(){
            var id = $('#userid').val();
            axios.get('/usersalaries', {
            params: {
              id:id,
            }
            })
            .then(response => this.salaries = response.data)
            .catch(function (error) {
            console.log(error);
            });
        },
        show_messages(){
            axios.get('/showmessages', {
            params: {
              
            }
            })
            .then(response => this.messages = response.data)
            .catch(function (error) {
            console.log(error);
            });
        },
        search_salary(){
            var name = $('input[type="search"]').val();
            axios.get('/search_salary', {
            params: {
              name:name,
            }
            })
            .then(response => this.students = response.data)
            .catch(function (error) {
            console.log(error);
            });
        },
        check_post(){
           axios.get('/check_post', {
            params: {
             
            }
            })
            .then(response => this.posts = response.data)
            .catch(function (error) {
            console.log(error);
            });
        }

    },
    mounted:{

    }
});
