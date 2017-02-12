FROM ubuntu
RUN apt update && apt upgrade -y
RUN apt install -y vim curl git tmux

# Node.js
# use nvm instead of apt which provide only v0.10.25
ENV NODE_VERSION v6.9.5
ENV NVM_DIR /usr/local/nvm
RUN curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.0/install.sh | bash
RUN bash -c "source $NVM_DIR/nvm.sh && nvm install $NODE_VERSION \
	&& npm install -g concurrently grunt-cli browserify watchify"

# Prepare ruby
# use rvm instead of apt which provides `ruby` of v1 or `ruby2.0`
ENV RUBY_VERSION 2.3.3
RUN curl -sSL https://get.rvm.io | bash -s stable --ruby=$RUBY_VERSION --gems=rails
RUN echo "source /usr/local/rvm/scripts/rvm" >> ~/.bashrc

