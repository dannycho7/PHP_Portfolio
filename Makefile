CSS_DIR = css
SCSS_IN = ${CSS_DIR}/scss/theme.scss
SCSS_OUT =${CSS_DIR}/theme.css


all: theme

theme:  
	sass ${SCSS_IN}:${SCSS_OUT}	
clean:
	rm ${SCSS_OUT}*
