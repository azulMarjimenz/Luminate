from flask import Flask, request, render_template

app = Flask(__name__)

@app.route('/')
def faculty_info():
    return render_template('index-work.html')

@app.route('/submit', methods=['POST'])
def submit():
    name = request.form['name']
    class_name = request.form['class']
    department = request.form['department']
    course = request.form['course']
    semester = request.form['semester']
    irb_training = request.form['irb_training']
    version_label = request.form['version_label']
    # Store this information in your database

    return "Data submitted successfully!"

@app.route('/download')
def download_script():
    # Provide a link to download the Python script for data anonymization
    return "Download the Python script here."

if __name__ == '__main__':
    app.run(debug=True)
