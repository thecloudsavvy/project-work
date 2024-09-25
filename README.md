## SHOPPING PLATFOFRM
# Technologies Used:
Kubernetes (EKS with eksctl)

Ingress with SSL Certificate (Cert-Manager)

GitHub Actions for CI/CD

Docker for Containerization

Amazon Route 53 for DNS Management

MySQL for Database

![relatives](./images/Screenshot%202024-08-24%20at%2023.26.42.png)

phpMyAdmin for Database Management

Helm for Kubernetes Package Management

Kubernetes Secrets and ConfigMaps

OIDC for Authentication

Persistent Volume Claims (PVC) and Storage Class for Data Persistence

Sonarqube for continous integration && Testing

Prometheus && grafana

![relatives](./images/Screenshot%202024-08-25%20at%2000.10.50.png)

- Setup to deploy on Aws Eks
- write a docker compose file and build an image of it
- Set up your cluster
- Add OIDC and Ebsci driver for addons
- confirm your setup is running
- kubectl get pod -n kube-system
- setup for creating pipeline using github actions
- In the same directory as your source, create a .github and workflows folders
create your configuration file (.yaml) in the workflows directory
choose a deployment strategies, here we are using rolling update deployment strategy
write your configuration files and add necessary credentials to your secrets
deploy your application
img

- setup for ingress and cert-manager
- Add ingress controller repo
- Add cert-manager to make app secure
- Add the cert-issuer configuration file
- configure the ingress controller

This project follows principle of devops
Continuous integration - using Github/actions
img

Continous deployment/delivery - using gitops tool (ArgoCD)


![relatives](./images/Screenshot%202024-08-25%20at%2020.06.08.png)


Code quality check - Sonarqube  


![relatives](./images/Screenshot%202024-09-24%20at%2021.47.07.png)



Continous Monitoring - Prometheus && grafana  


![relatives](./images/Screenshot%202024-09-25%20at%2000.47.51.png)  


Project status
project is complete  

Contact  

Created by @Thecloudsavvy - feel free to contact me!#