# SECURITY WARNING: don't run with debug turned on in production!

if os.environ.get('ENV') == 'PRODUCTION':

    DEBUG = False

else:

    DEBUG = True

SECRET_KEY = os.environ.get('SECRET_KEY', 'c@n%u@91tum=@j392g20b8znh7dqfo-v%81))gxbbmu$=dy_*)') # development key for the moment


$ python

>>> import random, string

>>> "".join([random.choice(string.printable) for _ in range(24)])

'-~aO;| F;rE[??/w^zcumh(9'

ALLOWED_HOSTS = ['intergenerations.herokuapp.com']
