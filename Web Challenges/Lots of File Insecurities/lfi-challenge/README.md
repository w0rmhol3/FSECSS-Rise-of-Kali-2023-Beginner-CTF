# LFI challenge

## install

* install docker

## build & run

* change directory to project folder containing dockerfile and run `docker build .`
* Last line is like `Successfully built 740cd0f55409`, we need the hash
* for running at port 8080 we use `docker run -p 8080:80 740cd0f55409`
* enjoy!

## stopping container

* run `docker ps` and copy very first hash at the left
* run `docker stop <hash> && docker rm <hash>`

this challenge was presented by me at the MRMCD 2015 in germany

@riesenwildschaf
