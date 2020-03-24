from flask import Flask, render_template, url_for, flash, redirect, request
from forms import RegistrationForm, LoginForm, ScheduleForm


app = Flask(__name__)


app.config['SECRET_KEY'] = '5791628bb0b13ce0c676dfde280ba245'


@app.route("/")
@app.route("/home")
def home():
    return render_template('home.html')


@app.route("/about")
def about():
    return render_template('about.html')


@app.route("/landing")
def landing():
    return render_template('landing.html')


@app.route("/register", methods=['GET', 'POST'])
def register():
    form = RegistrationForm()
    if form.validate_on_submit():
        flash(f'Account created for {form.username.data}!', 'is-success')
        return redirect(url_for('home'))
    return render_template('register.html', title='Register', form=form)


@app.route("/login", methods=['GET', 'POST'])
def login():
    form = LoginForm()
    if form.validate_on_submit():
        if form.email.data == 'admin@blog.com' and form.password.data == 'password':
            flash('You have been logged in!', 'is-success')
            return redirect(url_for('home'))
        else:
            flash('Login Unsuccessful. Please check username and password', 'is-danger')
    return render_template('login.html', title='Login', form=form)


@app.route("/schedule", methods=['GET', 'POST'])
def schedule():
    return render_template('schedule-post.html')


@app.route("/schedule-post", methods=['GET', 'POST'])
def postschedule():
    if request.method == 'POST':
        day = request.form['day']
        event = request.form.get('event')
        return render_template('schedule-post.html', title='Schedule', day=day, event=event)
    else:
        return render_template('schedule.html', title='Schedule')


@app.route("/assignments")
def assignments():
    return render_template('assignments.html')


@app.route("/tasks")
def tasks():
    return render_template('tasks.html')


if __name__ == '__main__':
    app.run(debug=True)
