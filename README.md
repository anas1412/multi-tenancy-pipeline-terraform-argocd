# Multi-Tenant SaaS Platform with Terraform, ArgoCD, and Kubernetes

## Overview

This project provisions a scalable, multi-tenant SaaS laravel platform where each tenant gets an isolated environment with their own services. The platform uses **Terraform** for infrastructure provisioning and **ArgoCD** for continuous application delivery, following a **GitOps** workflow.

## Technologies Used
- **Terraform** for cloud infrastructure management (AWS EKS, Kubernetes, IAM).
- **ArgoCD** for GitOps-based deployment of Kubernetes applications.
- **Kubernetes** for container orchestration and multi-tenancy.
- **Helm** for managing Kubernetes applications.
- **AWS EKS** for hosting the Kubernetes cluster.
- **Laravel** for building a tenant management dashboard.
- **Prometheus** and **Grafana** for monitoring.
- **PostgreSQL** as a database solution for tenants.

## Features
- Multi-tenancy: Each tenant has an isolated environment (namespace) on Kubernetes.
- **Automated Provisioning**: Use **Terraform** to create the infrastructure on AWS and Kubernetes.
- **GitOps Deployment**: Use **ArgoCD** to manage continuous delivery and application deployment.
- **Tenant Management**: Use a **Laravel dashboard** to manage tenant creation and application provisioning.

## Architecture 

<img src="multi-tenant-saas-platform.png" alt="Multi SaaS Plateform Architecture">
