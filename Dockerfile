# Use an official Python runtime as a parent image
#FROM python:2.7-slim

# Set the working directory to /app
#WORKDIR /app

# Copy the current directory contents into the container at /app
#COPY . /app

# Install any needed packages specified in requirements.txt
#RUN pip install --trusted-host pypi.python.org -r requirements.txt

# Make port 80 available to the world outside this container
#EXPOSE 81

# Define environment variable

#ENV NAME World

# Run app.py when the container launches
#CMD ["python", "capstone.py"]


FROM ubuntu
MAINTAINER bhuvanesh chowdary <bhuvaneshchowdary19@gmail.com>

RUN apt-get update
RUN apt-get install -y software-properties-common vim
RUN add-apt-repository ppa:jonathonf/python-3.6
RUN apt-get update
RUN apt-get install -y build-essential python3.6 python3.6-dev python3-pip python3.6-venv

ADD target/dist/Capstone-1.0.dev0/dist/Capstone-1.0.dev0.tar.gz Capstone-1.0.dev0.tar.gz

CMD ["echo","Hello World from ICC Project"]
