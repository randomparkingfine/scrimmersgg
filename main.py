# I don't think we're allowed to use python but I'm doing this just so i can test things without a backend right now
# if we are allowed to use python, well then all the static routes are on and the urls will be really easy 
from flask import Flask, render_template
from flask import send_from_directory

app = Flask('scrimmers', template_folder='static/html')

# Some basic routing
@app.route('/')
def homepage():
    return render_template('index.html')

# Library routes
# The frontend has a few special case routes that we need to account for
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

# Dev routes
# These routes are things that we make or override ourselves
# We'll start with some root level pages first
@app.route('/about')
def aboutPage():
    return render_template('about.html')

@app.route('/signup')
def signupPage():
    return render_template('signup.html')

@app.route('/images/<path:filename>')
def staticImages(filename):
    return send_from_directory('./images/', filename)

# Each game gets a region page for simplicity sake
@app.route('/region/<path:filename>')
def serveRegion(filename):
    # File name is going to be the game 
    # File names are region-<filename>.html
    game = f'region-{filename}.html'
    print(game)
    return send_from_directory('./static/html/', game)

@app.route('/elements')
def elements():
    return render_template('elements.html')

if __name__ == "__main__":
    app.run(debug=True)