# I don't think we're allowed to use python but I'm doing this just so i can test things without a backend right now
# if we are allowed to use python, well then all the static routes are on and the urls will be really easy 
from flask import Flask, render_template
from flask import send_from_directory

import config
app = Flask('scrimmers', template_folder='static/html')

# Some basic routing
@app.route('/')
def homepage():
    return render_template('index.html')

'''
Library routes
The frontend has a few special case routes that we need to account for
 '''
@app.route('/assets/js/<path:filename>')
def libJS(filename):
    # this path should be relative i guess
    return send_from_directory('./assets/js/', filename)

@app.route('/assets/css/<path:filename>')
def libCSS(filename):
    return send_from_directory('./assets/css/', filename)

@app.route('/assets/fonts/<path:filename>')
def libFONTS(filename):
    return send_from_directory('./assets/fonts/', filename)

@app.route('/images/<path:filename>')
def staticImages(filename):
    return send_from_directory('./images/', filename)

# Give us back the page which sits at the url's base level
@app.route('/<path:filename>')
def gamePage(filename):
    print(f'{filename} referenced')
    if filename in config.basePages:
        return render_template(config.basePages[filename])

if __name__ == "__main__":
    app.run(debug=True)
